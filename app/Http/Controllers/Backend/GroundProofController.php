<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Finding;

use App\Models\GroundProof;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Mail\InquiryComplete;
use Illuminate\Support\Facades\Response;
use App\Models\RemoteAssessment;
use App\Mail\GroundProofComplete;
use App\Models\GroundProofSurvery;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class GroundProofController extends Controller
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
                })
                ->whereHas('remote_assessment', function($q){
                    $q->where('status','completed');
                });
        if ($request->query('q') /* && $request->query('q')=='completed' */) {
            
            if (!auth()->user()->hasAnyRole("superadmin|endUser") ) {
                $user=$user->whereHas('ground_proof', function($q) use ($request){
                        $q->where('paid',1)->where('status',$request->query('q'))->where('assign_to',auth()->user()->id);
                    })
                    ->get();
            }
            else{
                $user=$user->whereHas('ground_proof', function($q) use ($request){
                        $q->where('paid',1)->where('status',$request->query('q'));
                    })
                    ->get();
            }

        } else {

            if (!auth()->user()->hasAnyRole("superadmin|endUser") ) {
                $user=$user->whereHas('ground_proof', function($q){
                        $q->where('paid',1)->where('status','pending')->where('assign_to',auth()->user()->id);
                    })
                    ->get();
            }
            else{
                $user=$user->whereHas('ground_proof', function($q){
                        $q->where('paid',1)->where('status','pending');
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
        
        return view('backend.groundproof.list',compact('user','contractors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function groundProofSurvey(Request $request,$id)
    {
        $gp=GroundProof::findOrFail($id);
        return view('backend.groundproof.newSurvey',compact('gp'));
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
            'vegetation_free_area'  => 'required|string',
            'veg_remarks'  => 'required|string',
            'grass'  => 'required|string',
            'combustible_presence'  => 'required|string',
            'logs_woodpile_value'  => 'string',
            'scrape_value'  => 'string|nullable',
            'flammable_value'  => 'string|nullable',
            'wild_grass_value'  => 'string|nullable',
            'conifer_value'  => 'string|nullable',
            'Gutters_value'  => 'string|nullable',
            'roof_line_value'  => 'string|nullable',
            'porch_value'  => 'string|nullable',
            'deck_value'  => 'string|nullable',

            'screen_attic'  => 'required|string',
            'screen_attic_value'  => 'string|nullable',
            'screen_soffit'  => 'required|string',
            'screen_soffit_value'  => 'string|nullable',
            'screen_foundation'  => 'required|string',
            'screen_foundation_value'  => 'string|nullable',
            'screen_chimney'  => 'required|string',
            'screen_chimney_value'  => 'string|nullable',

            'space_assess1_trees'  => 'required|integer',
            'space_assess1_trees_distance'  => 'required|integer',
            'space_assess1_density'  => 'required|string',
            'space_assess1_space_arrangement'  => 'required|string',
            'location'  => 'required|string',
            'space_assess1_img'  => 'required|image',
            'space_assess1_img_description'  => 'required|string',
            'space_assess1_sme_comments'  => 'required|string',

            'space_assess2_trees'  => 'required|integer',
            'space_assess2_trees_density'  => 'required|string',
            'space_assess2_density'  => 'required|string',
            'space_assess2_space'  => 'required|string',
            'space_assess2_clumpsize'  => 'required|string',
            'space_assess2_ladder_fuel'  => 'required|string',
            'space_assess2_neighbour_vege'  => 'required|string',
            'space_assess2_site_findings'  => 'required|string',
            'space_assess2_slope'  => 'required|string',
            'space_assess2_aspects'  => 'required|string',
            'space_assess2_rock'  => 'nullable|string',
            'space_assess2_Pond'  => 'nullable|string',
            'space_assess2_stream'  => 'nullable|string',
            'space_assess2_road'  => 'nullable|string',
            'space_assess2_meadow'  => 'nullable|string',
            'space_assess2_sme_comments'  => 'required|string',
            'space_assess2_img'  => 'required|image',

           /*  'combustibles' => 'required|array',
            'combustibles.*' => 'string',
            'leave_deposits' => 'required|array',
            'leave_deposits.*' => 'string',
            'screening' => 'required|array',
            'screening.*' => 'string',
            'barrier' => 'required|array',
            'barrier.*' => 'string', */
        ]);
        
        if ($validator->fails()) {
            /* return $validator->errors(); */
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        /* dd($request->all()); */
        $gp =GroundProof::findOrFail($request->gp_id);
        $req=$request->except(['_token','gp_id']);
        foreach ($req as $key => $value) {
            if (!is_null($value)) {
                $survey = new GroundProofSurvery;
                $survey->gp_id=$gp->id;
                $survey->key =$key;
                if ($request->hasFile($key)) {
                    $img = custom_file_upload($request->file($key),'public','uploads/uploadData',null,null,null,null);
                    $survey->value =$img;
                }
                else{
                    $survey->value =$value;
                }
                
                $survey->save();
            }
            
        }
        /* dd($survey); */
        /* $survey->fill($request->all());
        $survey->combustibles=implode(';',$request->combustibles);
        $survey->leave_deposits=implode(';',$request->leave_deposits);
        $survey->screening=implode(';',$request->screening);
        $survey->barrier=implode(';',$request->barrier);
        $survey->save(); */

        $finding=new Finding;
        $finding->type= 'ground_proof';
        $finding->serial=unique_string('findings','serial',8);
        $finding->gp_id=$gp->id;
        $finding->save();

        $gp->status='completed';
        $gp->save();

        $data=[
            "serial"=>$finding->serial
        ];
        
        Mail::to($gp->user->email)->send(new GroundProofComplete($data));
        
        if ($finding && $gp) {
            return redirect()->back()->with("status", "GroundProof Report Submitted.");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        /* dd($request->all()); */
        if ($request->query('type') && $request->query('type')=="ground_proof") {
            $ga=GroundProof::findOrFail($id);
            $ra=$ga->remote_assessment;
            $data=[
                "ra"=>$ra,
                "findings"=>$ga->findings()->exist() ? $ga->findings->last() : null,
                "type"=>$request->type,
            ];
            return view('backend.remote-assessment-contracts.show',compact('data'));
        }
        abort(404);
        
        
    }

    public function groundProofStatus(Request $request)
    {
        /* dd($request->all()); */
        $ground=GroundProof::findOrFail($request->gp_id);
        $ground->status=$request->status;
        $ground->note=$request->note;
        $ground->save();
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

    public function groundProofFindings(Request $request)
    {
        /* dd($request->all()); */
        $validator = Validator::make(
            [
                'file'      => $request->finding,
                'extension' => strtolower($request->finding->getClientOriginalExtension()),
                'message'      => $request->message,
                'gp_id'      => $request->gp_id,
            ]
            ,[
                'file'      => 'required',
                'extension'      =>'required|in:pdf,docx',

                'message'      => 'required|string',
                'gp_id'      =>'required|integer',
            ]
        );
        
        if ($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $gp=GroundProof::findOrFail($request->gp_id);
        $report = custom_file_upload($request->file('finding'),'public','uploads/uploadData',null,null,null,null);
        $finding=new Finding;
        $finding->type= 'ground_proof';
        $finding->gp_id=$gp->id;
        $finding->file= $report;
        $finding->message= $request->message;
        $finding->save();

        $gp->status='completed';
        $gp->save();
        /* try { */
            $data=[
                "message"=>$request->message,
                "report"=>$report
            ];
            
            Mail::to($gp->user->email)->send(new GroundProofComplete($data));
            if ($finding) {
                return redirect()->back()->with("status", "Report Submitted.");
            }
            
        /* } catch (\Throwable $th) {
            
            return redirect()->back()->with("error", "Something went wrong.");
        } */

    }


    public function groundProofAssign(Request $request)
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
        $ground=GroundProof::findOrFail($request->gp_id);
        $ground->assign_to=$request->contractor;
        $ground->note_to_contractor=$request->note_to_contractor;
        $ground->save();
        if ($ground) {
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
