<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeModelController;
use App\Http\Controllers\VisitorModelController;
use App\Http\Controllers\ServiceModelController;
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Home');
// });
Route::get('/',[HomeModelController::class,'HomeIndex']);

Route::get('/visitor',[VisitorModelController::class,'visitorIndex']);

Route::get('/Service',[ServiceModelController::class,'serviceIndex']);
Route::get('create',[ServiceModelController::class,'create']);
Route::post('store',[ServiceModelController::class,'store']);
Route::get('/Service',[ServiceModelController::class,'indexs']);