<?php

namespace App\Http\Controllers;

use App\Models\RemoteAssessment;
use App\Models\Attachment;
use App\Models\Plan;
use App\Models\Profile;

use Illuminate\Http\Request;

class RemoteAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=auth()->user();
        $data=[
            'images'=>auth()->user()->attachments->where('type','image')
        ];

        $subs=auth()->user()->subscriptions()->active()->first();
        
        if (!is_null($subs) && $subs->count()>0) {
            $plan=Plan::select('name','description','pictures','social_links','social_limit')->where('stripe_plan',$subs->stripe_plan)->first();
            
            $data["plan"]=$plan;
        }

        return view('frontend.dashboard.initial-survey',compact('user','data'))->with('intent', $request->user()->createSetupIntent());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $stripeCharge = $request->user()->charge(5000, $request->paymentMethod); //STRIPE ACCEPTS PAYMENT IN CENT
        if ($stripeCharge && $stripeCharge->status=='succeeded') 
        {
            $user=auth()->user();
            $user->paid=1;
            $user->save();
            
            $profile=new RemoteAssessment;
            $profile->user_id=auth()->user()->id;
            $profile->paid=1;
            $profile->amount=5000;
            $profile->fill($request->all());
            $profile->save();

            $report = custom_file_upload($request->file('history_report'),'public','uploads/uploadData',null,null,null,null);
            $attach=new Attachment;
            $attach->user_id=auth()->user()->id;
            $attach->file=$report;
            $attach->save();

            return redirect()->route('thanks')->with(array(
                'message' => 'Data saved !', 
                'alert-type' => 'success'
            ));
        }
        else{
            return redirect()->back()->with(array(
                'message' => 'Something went wrong,please try again', 
                'alert-type' => 'error'
            ));
        }
    }


    public function storeMedia(Request $request)
    {
        if ($request->hasFile('file') || $request->file('file')) {
            $img = custom_file_upload($request->file('file'),'public','uploads/uploadData',null,null,null,null);
            
            $attach=new Attachment;
            $attach->user_id=auth()->user()->id;
            $attach->type='image';
            $attach->file=$img;
            $attach->save();

            $notify=array('name'=>$img,'original_name' => $request->file('file')->getClientOriginalName());
        }
        else{
            $notify=array('name'=>null,'original_name' => null);
        }

        return response()->json($notify);
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        Attachment::where('file',$filename)->delete();
        $path=storage_path('app/public/uploads/uploadData/'.$filename);
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RemoteAssessment  $remoteAssessment
     * @return \Illuminate\Http\Response
     */
    public function show(RemoteAssessment $remoteAssessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RemoteAssessment  $remoteAssessment
     * @return \Illuminate\Http\Response
     */
    public function edit(RemoteAssessment $remoteAssessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RemoteAssessment  $remoteAssessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RemoteAssessment $remoteAssessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RemoteAssessment  $remoteAssessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemoteAssessment $remoteAssessment)
    {
        //
    }
}
