<?php

namespace App\Http\Controllers;

use App\Models\RemoteAssessment;
use Illuminate\Http\Request;

class RemoteAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.dashboard.initial-survey');
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
        dd($request->all());
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
