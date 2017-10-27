<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/test','TestController@test');
Route::post('/doctor/register','DoctorController@register');
Route::post('/doctor/login','DoctorController@login');
//Route::post('demo','TestController@Demo');

