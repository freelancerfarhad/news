<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
class ServiceController extends Controller
{
   
    public function index()
    {
        
          //  $serviceData = json_decode(ServiceModel::orderBy('id','desc')->take(500)->get());

       		 // return view('Services',['service'=>$serviceData]);

        // $services= ServiceModel::all();
        // return view('Services')->with('service',$services);
    }

    public function create()
    {
        //
        return view('create');
    }
    public function serviceIndex()
    {
        //
        return view('Services');
    }

    public function store(Request $request)
    {
        //
        // $input = $request->all();
        // ServiceModel::create($input);
        // return redirect('service')->with('flash_message','Service Added !');
    }

  
    public function show($id)
    {
        //
        // $service = ServiceModel::find($id);
        // return view('show')->with('service',$service);
    }

    public function edit($id)
    {
        // //
        //  $service = ServiceModel::find($id);
        // return view('edit')->with('service',$service);
    }

   
    public function update(Request $request, $id)
    {
        //
        // $service = ServiceModel::find($id);
        // $input = $request->all();
        // $service->update($input);
        // return redirect('service')->with('flash_message', 'service Updated!'); 
    }

   
    public function destroy($id)
    {
        // //
        // ServiceModel::destroy($id);
        //    return redirect('service')->with('flash_message','Service Delete !');
    }
}

