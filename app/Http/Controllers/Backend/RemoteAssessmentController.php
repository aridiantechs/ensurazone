<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Finding;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Mail\InquiryComplete;
use Illuminate\Http\Response;
use App\Models\RemoteAssessment;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RemoteAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::whereHas('roles', function($q){
            $q->where('name','endUser');
        });

        if ($request->query('q')) {
            if (!auth()->user()->hasAnyRole("superadmin|endUser") ) {
                $user = $user->whereHas('remote_assessment', function($q) use($request){
                    $q->where('status',$request->query('q'))->where('assign_to',auth()->user()->id);
                })
                ->get();
            }
            else{
                $user = $user->whereHas('remote_assessment', function($q) use($request){
                    $q->where('status',$request->query('q'));
                })
                ->get();
            }
        } else {

            if (!auth()->user()->hasAnyRole("superadmin|endUser") ) {
                $user = $user->whereHas('remote_assessment', function($q){
                            $q->where('status','pending')->where('assign_to',auth()->user()->id);
                        })
                        ->get();
            }
            else{
                $user = $user->whereHas('remote_assessment', function($q){
                            $q->where('status','pending');
                        })
                        ->get();
            }
        }
        
        $contractors = User::whereHas(
                'roles', function($q){
                    $q->whereNotIn('name',['superadmin','endUser']);
                }
            )->get();
            
        /* dd($user); */
        
        return view('backend.remote-assessment-inquiries.list',compact('user','contractors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $roles=Role::where('name','<>','superadmin')->get();
        return view('backend.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(),[
            'role_id'  => 'required|integer',
            'name'  => 'required|string',
            'email' => 'required|string',
            'password'  => 'required|string',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            /* return 'error'; */
        }

        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        if ($request->has('password')) {
			$user->password =  Hash::make($request->password);
		}
        $user->save();

        $role=Role::where('id',$request->role_id)->first();
        $user->assignRole($role->name);
        
        return redirect()->back()->with("status", "User has been Created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ra=RemoteAssessment::findOrFail($id);
        
        return view('backend.remote-assessment-contracts.show',compact('ra'));
    }

    public function assignRole(Request $request)
    {
        $user=User::findOrFail($request->user_id);
        if ($user) {
            $role=Role::where('id',$request->role_id)->first();
            if ($role) {
                $user->removeRole($user->roles[0]->name);
                $user->assignRole($role->name);
                return redirect()->back()->with("status", "Role has been Updated.");
            }
        }

    }

    public function remoteAssessmentStatus(Request $request)
    {
        /* dd($request->all()); */
        $remote=RemoteAssessment::findOrFail($request->ra_id);
        $remote->status=$request->status;
        $remote->note=$request->note;
        $remote->save();
        return redirect()->back()->with("status", "Status Updated.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::findOrFail($id);
        $roles=Role::where('name','<>','superadmin')->get();
        return view('backend.user.create',compact('user','roles'));
    }

    public function remote_assessment_report($file)
    {
        // Check if file exists in app/storage/file folder
        $file_path = public_path().'/storage/uploads/uploadData/'.$file;
        /* echo($file_path); */
        if (file_exists($file_path))
        {
            /* return 123; */
            // Send Download
            return Response::download($file_path, $file, [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            // Error
            exit('Requested file does not exist on our server!');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(),[
            'name'  => 'required|string',
            'email' => 'required|string',
            'password'  => 'string|nullable',
        ]);
        
        if ($validator->fails()) {
            return $validator->errors();
            /* return redirect()->back()
                        ->withErrors($validator)
                        ->withInput(); */
            /* return 'error'; */
        }

        $user =User::findOrFail($id);
        $user->name=$request->name;
        $user->email=$request->email;
        if ($request->has('password')) {
			$user->password =  Hash::make($request->password);
		}
        $user->save();

        if ($request->has('role_id')) {
            $user->removeRole($user->roles[0]->name);
            $role=Role::where('id',$request->role_id)->first();
            $user->assignRole($role->name);
        }
        
        return redirect()->back()->with("status", "User has been Updated.");
    }

    public function updateRA(Request $request)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(),[
            'address1'  => 'required|string',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            /* return 'error'; */
        }

        $ra=RemoteAssessment::findOrFail($request->ra_id);
        $ra->fill($request->all());
        $ra->save();
        
        if ($ra) {
            return redirect()->back()->with("status", "User has been Updated.");
        }else{
            return redirect()->back()->with("error", "Something went wrong.");
        }
        
    }

    public function remoteAssessmentFindings(Request $request)
    {
        /* dd($request->all()); */
        /* Validator::extend('is_png',function($attribute, $value, $params, $validator) {
            $image = base64_decode($value);
            $f = finfo_open();
            $result = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);
            return $result == 'image/png';
        }); */
        
        $validator = Validator::make(
            [
                'file'      => $request->cropped_img,
                /* 'extension' => strtolower($request->image->getClientOriginalExtension()), */
                'message'      => $request->message,
                'ra_id'      => $request->ra_id,
            ]
            ,[
                /* 'file'      => 'required|is_png', */
                /* 'extension'      =>'required|in:pdf,docx', */

                'message'      => 'required|string',
                'ra_id'      =>'required|integer',
            ]
        );
        /* dd($validator->errors()); */
        if ($validator->fails()) {
            /* return $validator->errors(); */
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            /* return 'error'; */
        }

        $ra=RemoteAssessment::findOrFail($request->ra_id);
        /* $image = custom_file_upload($request->file('image'),'public','uploads/uploadData',null,null,null,null); */
        $folderPath = public_path('storage/uploads/uploadData/');
 
        $image_parts = explode(";base64,", $request->cropped_img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);

        $finding=new Finding;
        $finding->type= 'remote_assessment';
        $finding->serial=unique_string('findings','serial',8);
        $finding->ra_id=$ra->id;
        $finding->file= $imageName;
        $finding->message= $request->message;
        $finding->save();

        $ra->status='completed';
        $ra->save();

        /* try { */
            $data=[
                "message"=>$request->message,
                /* "report"=>$image */
                "report"=>$finding->serial
            ];
            
            Mail::to($ra->user->email)->send(new InquiryComplete($data));
            if ($finding) {
                return redirect()->back()->with("status", "Report Submitted.");
            }
            
        /* } catch (\Throwable $th) {
            
            return redirect()->back()->with("error", "Something went wrong.");
        } */

    }


    public function remoteAssessmentAssign(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'contractor'  => 'required|integer',
            'note_to_contractor' => 'required|string',
        ]);
        
        if ($validator->fails()) {
            $request->session()->flash('error', 'Fields Required');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            /* return 'error'; */
        }

        /* dd($request->all()); */
        $remote=RemoteAssessment::findOrFail($request->ra_id);
        $remote->assign_to=$request->contractor;
        $remote->note_to_contractor=$request->note_to_contractor;
        $remote->save();
        if ($remote) {
            return redirect()->back()->with("status", "Assigned.");
        } else {
            return redirect()->back()->with("error", "Something went wrong.");
        }
        
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
