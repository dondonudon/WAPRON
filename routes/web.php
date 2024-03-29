<?php

use Illuminate\Support\Facades\Route;
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
    return view('dashboard.layout');
});

Route::get('trial/{data}',function ($data) {
    return \App\Http\Controllers\GenerateRandomController::code($data);
});

Route::get('verify/{id}','RegisterController@verifyIndex');
Route::post('verify','RegisterController@verify');


