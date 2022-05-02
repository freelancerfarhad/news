<?php

namespace App\Http\Controllers;

use App\Models\visitorModel;
use App\Http\Requests\StorevisitorModelRequest;
use App\Http\Requests\UpdatevisitorModelRequest;

class VisitorModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function visitorIndex()
    {
          $VisitorData = json_decode(visitorModel::orderBy('id','desc')->take(500)->get());

        return view('visitor',['visitorData'=>$VisitorData]);
        
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
     * @param  \App\Http\Requests\StorevisitorModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevisitorModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visitorModel  $visitorModel
     * @return \Illuminate\Http\Response
     */
    public function show(visitorModel $visitorModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visitorModel  $visitorModel
     * @return \Illuminate\Http\Response
     */
    public function edit(visitorModel $visitorModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevisitorModelRequest  $request
     * @param  \App\Models\visitorModel  $visitorModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevisitorModelRequest $request, visitorModel $visitorModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visitorModel  $visitorModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(visitorModel $visitorModel)
    {
        //
    }
}
