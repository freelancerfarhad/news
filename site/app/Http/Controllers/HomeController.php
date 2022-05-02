<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ServiceModel;

class HomeController extends Controller
{
    //
    function HomeIndex(){

      
        $UserIP=$_SERVER['REMOTE_ADDR'];  // Ip Get user Address
         date_default_timezone_set("Asia/Dhaka"); // Date Time
        $timeDate= date("Y-m-d h:i:sa");

        VisitorModel::insert(['ip_address'=>$UserIP,'visit_time'=>$timeDate]);//insert user ip and time

      $servicetData= json_decode(ServiceModel::all());

        return view('Home',['servicetData'=>$servicetData]);
    }
}
