<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;
use Illuminate\Routing\Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('insertData',[mycontroller::class,'insert']);
Route::get('/',[mycontroller::class,'readData']);
// Route::view('update','updateView');
Route::get('updatedelete',[mycontroller::class,'updateOrdelete']);
Route::get('updatedata',[mycontroller::class,'update']);
