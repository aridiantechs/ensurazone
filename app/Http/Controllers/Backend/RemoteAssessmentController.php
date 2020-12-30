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
        if ($request->query('q') /* && $request->query('q')=='completed' */) {
            $user = User::whereHas(
                'roles', function($q){
                    $q->where('name','endUser');
                }
            )->whereHas(
                'remote_assessment', function($q) use($request){
                    $q->where('status',$request->query('q'));
                }
                )->get();  
        } else {
            $user = User::whereHas(
            'roles', function($q){
                $q->where('name','endUser');
            }
            )->whereHas(
                'remote_assessment', function($q){
                    $q->where('status','pending');
                }
            )->get();
        }
        
        /* dd($user); */
        
        return view('backend.remote-assessment-inquiries.list',compact('user'));
        
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
        $validator = Validator::make(
            [
                'file'      => $request->finding,
                'extension' => strtolower($request->finding->getClientOriginalExtension()),
                'message'      => $request->message,
                'ra_id'      => $request->ra_id,
            ]
            ,[
                'file'      => 'required',
                'extension'      =>'required|in:pdf,docx',

                'message'      => 'required|string',
                'ra_id'      =>'required|integer',
            ]
        );
        
        if ($validator->fails()) {
            /* return $validator->errors(); */
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
            /* return 'error'; */
        }

        $ra=RemoteAssessment::findOrFail($request->ra_id);
        $report = custom_file_upload($request->file('finding'),'public','uploads/uploadData',null,null,null,null);
        $finding=new Finding;
        $finding->type= 'remote_assessment';
        $finding->ra_id=$ra->id;
        $finding->file= $report;
        $finding->message= $request->message;
        $finding->save();

        /* try { */
            $data=[
                "message"=>$request->message,
                "report"=>$report
            ];
            
            Mail::to($ra->user->email)->send(new InquiryComplete($data));
            if ($finding) {
                return redirect()->back()->with("status", "Report Submitted.");
            }
            
        /* } catch (\Throwable $th) {
            
            return redirect()->back()->with("error", "Something went wrong.");
        } */

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
