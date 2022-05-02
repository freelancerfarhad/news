<?php

use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\ServiceController;



//  Route::namespace('App\Http\Controllers')->group(function(){

//   	Route::get('/','HomeController@HomeIndex');
//       	Route::get('/visitor','VisitorController@VisitorIndex');
//        	 // Route::get('/service','ServiceController@serviceIndex');
       	  
// //       		// Route::post('/service','ServiceController@update');
 


// });

Route::get('create', [ServiceController::class, 'create'])->name('create');