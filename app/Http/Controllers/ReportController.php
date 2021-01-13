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
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $finding=Finding::where('serial',$id)->first();
        if ($finding) {
            return view('print.remote_assess',compact('finding'));
        } else {
            abort(404);
        }
    }
}
