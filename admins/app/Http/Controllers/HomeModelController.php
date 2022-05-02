<?php

namespace App\Http\Controllers;

use App\Models\homeModel;
use App\Http\Requests\StorehomeModelRequest;
use App\Http\Requests\UpdatehomeModelRequest;

class HomeModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function HomeIndex()
    {
        return view('Home');
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
     * @param  \App\Http\Requests\StorehomeModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehomeModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\homeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function show(homeModel $homeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\homeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(homeModel $homeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehomeModelRequest  $request
     * @param  \App\Models\homeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehomeModelRequest $request, homeModel $homeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\homeModel  $homeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeModel $homeModel)
    {
        //
    }
}
