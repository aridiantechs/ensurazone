<?php

namespace App\Http\Controllers\Account;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\File;
use App\Models\Attachment;
use App\Models\Mitigation;
use App\Models\GroundProof;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RemoteAssessment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data=[
            'user'=>auth()->user()->remote_assessment()->exists() ? auth()->user()->remote_assessment : null,
            'images'=>auth()->user()->attachments->where('type','image')
        ];
        
        $subs=auth()->user()->subscriptions()->active()->first();
        
        if (!is_null($subs) && $subs->count()>0) {
            $plan=Plan::select('name','description','pictures','social_links','social_limit')->where('stripe_plan',$subs->stripe_plan)->first();
            
            $data["plan"]=$plan;
        }
        /* dd($data['social'][0]); */
        return view('frontend.dashboard.index',compact('data'))->with('intent', $request->user()->createSetupIntent());

    }

    public function store(Request $request)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(), [
            'username' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'dob' => ['required', 'string'],
        ]);
        
        if ($validator->fails()) {
            $request->session()->flash('error', 'Something went wrong !');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        try {
           
            $user=RemoteAssessment::where('user_id',auth()->user()->id)->first();
            $user->fill($request->all());
            $user->save();
            
            return redirect()->back()->with(array(
                'message' => 'Data saved !', 
                'alert-type' => 'success'
            ));
        } catch (\Throwable $th) {
            return redirect()->back()->with(array(
                'message' => 'Something went wrong.', 
                'alert-type' => 'error'
            ));
        }
        
    }

    public function upgrade_plan(Request $request)
    {
        /* dd($request->all()); */
        $validator = Validator::make($request->all(), [
            'paymentMethod' => ['required', 'string'],
            'upgrade_type' => ['required', 'string'],
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->with(array(
                'message' => 'payment method not valid.', 
                'alert-type' => 'error'
            ));
        }

        try {
            
            if ($request->upgrade_type=='ground_proof') {
                $user_plan=GroundProof::where('user_id',auth()->user()->id)->first();
                if ($user_plan) {
                    $data=array(
                        'message' => 'Already upgraded!', 
                        'alert-type' => 'warning'
                    );
                }
                else{
                    $stripeCharge = $request->user()->charge(5000, $request->paymentMethod); //STRIPE ACCEPTS PAYMENT IN CENT
                    if ($stripeCharge && $stripeCharge->status=='succeeded') 
                    {
                        $ground=new GroundProof;
                        $ground->user_id=auth()->user()->id;
                        $ground->remote_assess_id=auth()->user()->remote_assessment->id;
                        $ground->amount=5000;
                        $ground->paid=1;
                        $ground->save();

                        
                        $data=array(
                            'message' => 'upgraded!', 
                            'alert-type' => 'success'
                        );
                    }
                }
                
            }
            elseif ($request->upgrade_type=='mitigation') {
                $user_plan=Mitigation::where('user_id',auth()->user()->id)->first();
                if ($user_plan) {
                    $data=array(
                        'message' => 'Already upgraded!', 
                        'alert-type' => 'warning'
                    );
                }
                else{
                    $stripeCharge = $request->user()->charge(5000, $request->paymentMethod); //STRIPE ACCEPTS PAYMENT IN CENT
                    if ($stripeCharge && $stripeCharge->status=='succeeded') 
                    {
                        $mitigation=new Mitigation;
                        $mitigation->user_id=auth()->user()->id;
                        $mitigation->gp_id=auth()->user()->ground_proof->id;
                        $mitigation->amount=5000;
                        $mitigation->paid=1;
                        $mitigation->save();

                        $data=array(
                            'message' => 'upgraded!', 
                            'alert-type' => 'success'
                        );
                    }
                }
            }
            
            return redirect()->back()->with($data);
            
        } catch (\Throwable $th) {
            return redirect()->back()->with(array(
                'message' => 'Something went wrong.', 
                'alert-type' => 'error'
            ));
        }
        
    }

    public function myPassword(Request $request)
    {
        /* dd($match); */
        $validator = Validator::make($request->all(), [
            'old_pass' => ['required', 'string'],
            'new_pass' => ['required', 'string'],
            'confirm_pass' => ['required', 'string'],
        ]);
        
        if ($validator->fails()) {
            $request->session()->flash('error', 'Something went wrong !');
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        
        $match=Hash::check($request->old_pass, auth()->user()->password);
        
        if ($match) {
            if ($request->new_pass === $request->confirm_pass) {
                $user=auth()->user();
                $user->password= Hash::make($request->confirm_pass);
                $user->save();

                $data=array(
                    'message' => 'Password updated !', 
                    'alert-type' => 'success'
                );
            } else {
                $data=array(
                    'message' => 'Password do not match !', 
                    'alert-type' => 'warning'
                );
            }
            
        } else {
            $data=array(
                'message' => 'Incorrect Password ', 
                'alert-type' => 'error'
            );
        }
        
        return redirect()->back()->with($data);
        
    }

    /* public function remote_assessment_report()
    {
        
        $file_path = public_path().'/report/book.pdf';
        
        if (file_exists($file_path))
        {
            return Response::download($file_path, 'book.pdf', [
                'Content-Length: '. filesize($file_path)
            ]);
        }
        else
        {
            exit('Requested file does not exist on our server!');
        }
        
    } */

    public function view_report(Request $request)
    {   
        /* dd($request->all()); */
        if ($request->query('q') && $request->query('q')=='remote_assessment') {
            if (auth()->user()->remote_assessment()->exists() && auth()->user()->remote_assessment->findings()->exists()) {
                $ra_report=auth()->user()->remote_assessment->findings->last();
                return redirect()->route('survey_report',$ra_report->serial);
            }
        }
        elseif ($request->query('q') && $request->query('q')=='ground_proof') {
            if (auth()->user()->ground_proof()->exists() && auth()->user()->ground_proof->findings()->exists()) {
                $gp_report=auth()->user()->ground_proof->findings->last();
                return redirect()->route('survey_report',$gp_report->serial);
            }
        }
        elseif ($request->query('q') && $request->query('q')=='mitigation') {
            if (auth()->user()->mitigation()->exists() && auth()->user()->mitigation->findings()->exists()) {
                $gp_report=auth()->user()->mitigation->findings->last();
                return redirect()->route('survey_report',$gp_report->serial);
            }
        }
        abort(404);
    }
    


}
