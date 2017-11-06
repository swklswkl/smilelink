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
/*******************************************测试demo***************1*********************************/
Route::post('/test','TestController@test');
/*******************************************公共接口****************1*********************************/
//文件上传接口
Route::post('file/upload','CommonController@uploadPictures');
Route::post('/test','CaseController@createArchivesNum');
/*******************************************正畸病历*************************************************/
//新增患者基本信息
Route::post('odtase/addInformation','OrthodonticCaseController@addInformation');
/*******************************************病例管理****************1*********************************/
//新增病例-选择服务内容信息查询
Route::get('case/seeService','CaseController@seeService');
//新增病例-1
Route::post('case/addEssentialInfo','CaseController@addEssentialInfo');
//新增病例-2
Route::post('case/addEssentialInfoSecond','CaseController@addEssentialInfoSecond');
Route::post('case/addEssentialInfoThird','CaseController@addEssentialInfoThird');
/*******************************************登录注册****************1*********************************/
Route::post('/doctor/register','DoctorController@register');
Route::post('/doctor/login','DoctorController@login');


