<?php

namespace App\Http\Controllers;

use App\Models\serviceModel;
use App\Http\Requests\StoreserviceModelRequest;
use App\Http\Requests\UpdateserviceModelRequest;

class ServiceModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function serviceIndex()
    {
        return view('services');
    }

    public function indexs()
    {
        $serveceshow = serviceModel::all();
        return view('services')->with('servData',$serveceshow);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreserviceModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreserviceModelRequest $request)
    {


           
        $requestData = $request->all();
        $fileName = time().$request->file('service_img')->getClientOriginalName();
        $path = $request->file('service_img')->storeAs('images', $fileName, 'public');
        $requestData["service_img"] = '/storage/'.$path;
        serviceModel::create($requestData);
        return redirect('Service')->with('flash_message', 'Employee Addedd!');  
    
        // $file = $request->hasFile('service_img');
        // if($file){
        //     $newFile = $request->file('service_img');
        //     $filePath = $newFile->store('images');

        //     serviceModel::create([
        //         'service_name'=>$request->service_name,
        //           'service_des'=>$request->service_des,
        //         'service_img'=>$filePath
        //     ]);
        // }
        // $requestData = $request->all();
        // $fileName = time().$request->file('service_img')->getClientOriginalName();
        // $path = $request->file('service_img')->storeAs('images', $fileName, 'public');
        // $requestData["photo"] = '/storage/'.$path;
        // serviceModel::create($requestData);
        // return redirect('/Service')->with('flash_message', 'Employee Addedd!');
       
      // $serviceModel = new serviceModel();
      // $serviceModel->service_name=$request->service_name;
      // $serviceModel->service_des=$request->service_des;
      //   $serviceModel->service_img=$request->service_img;
      //     $serviceModel->save();
      //     return redirect('/Service');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\serviceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function show(serviceModel $serviceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\serviceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function edit(serviceModel $serviceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateserviceModelRequest  $request
     * @param  \App\Models\serviceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateserviceModelRequest $request, serviceModel $serviceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\serviceModel  $serviceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviceModel $serviceModel)
    {
       serviceModel::destroy($id);
           return redirect('/Service')->with('flash_message','Service Delete !');
    }
}
