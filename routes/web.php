<?php

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
/*-------------------------------首页接口-------------------------------*/
Route::get('/', function () {
    return view('welcome');
});
/*-----------------------------医生账号接口-----------------------------*/


/*-----------------------------医生病例接口-----------------------------*/


/*-------------------------------首页接口-------------------------------*/


/*-------------------------------测试接口-------------------------------*/
Route::get('test','TestController@Test');
Route::get('register',function () {
    return view('test.index');
});
