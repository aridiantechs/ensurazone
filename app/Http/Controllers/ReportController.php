<?php

namespace App\Http\Controllers;

use App\Models\Finding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* $this->middleware('auth'); */
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

    public function sample_report(Request $request)
    {
        /* dd($request->all()); */
        if ($request->query('q')) {
            if ($request->query('q')=='ground_proof' || $request->query('q')=='mitigation' || $request->query('q')=='remote_assessment') {
                $file_path = public_path().'/report/sample_'.$request->query('q').'.pdf';
        
                if (file_exists($file_path))
                {
                    return Response::download($file_path, $request->query('q').'.pdf', [
                        'Content-Length: '. filesize($file_path)
                    ]);
                }
                else
                {
                    exit('Requested file does not exist on our server!');
                } 
            }
            
            
        } else {
            return "permission denied...";
        }
        
        
        
    }
}
