<?php

namespace App\Http\Controllers;

use App\Models\Finding;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $finding=Finding::where('serial',$id)->first();
        if ($finding) {
            if ($finding->type=='remote_assessment') {
                return view('print.remote_assess',compact('finding'));
            }
            elseif($finding->type=='ground_proof') {
                if ($finding->ground_proof()->exists() && $finding->ground_proof->ground_proof_survey()->exists()) 
                {
                    $survey=$finding->ground_proof->ground_proof_survey;
                    /* dd($survey->where('key','space_assess2_aspects')); */
                    return view('print.groundproof',compact('finding','survey'));
                }
            }
            
        }
        abort(404);
    }
}
