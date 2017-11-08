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
Route::get('/test','TestController@cx');
Route::get('/cxjz','TestController@cxjz');
/*******************************************公共接口****************1*********************************/
//文件上传接口
Route::post('file/upload','CommonController@uploadPictures');
Route::post('/test','CaseController@createArchivesNum');
Route::get('china/city', 'ChinaController@city');
Route::get('china/province', 'ChinaController@province');
Route::get('china/district', 'ChinaController@district');
/*******************************************正畸病历*************************************************/
//新增患者基本信息
Route::post('odtcase/addInformation','OrthodonticCaseController@addInformation');
//新增主诉和病史
Route::post('odtcase/addChiefAndComplaint','OrthodonticCaseController@addChiefAndComplaint');
//新增图片资料
Route::post('odtcase/addImages','OrthodonticCaseController@addImages');
//新增临床检查
Route::post('odtcase/addClinicalExamination','OrthodonticCaseController@addClinicalExamination');
//新增X光分析
Route::post('odtcase/addXRayAnalysis','OrthodonticCaseController@addXRayAnalysis');
//新增诊断设计
Route::post('odtcase/addDiagnosticDesign','OrthodonticCaseController@addDiagnosticDesign');
//新增治疗进展
Route::post('odtcase/addTreatmentProcess','OrthodonticCaseController@addTreatmentProcess');
//编辑患者基本信息
Route::post('odtcase/editInformation','OrthodonticCaseController@addInformation');
//编辑主诉和病史
Route::post('odtcase/editChiefAndComplaint','OrthodonticCaseController@addChiefAndComplaint');
//编辑图片资料
Route::post('odtcase/editImages','OrthodonticCaseController@addImages');
//编辑临床检查
Route::post('odtcase/editClinicalExamination','OrthodonticCaseController@addClinicalExamination');
//编辑X光分析
Route::post('odtcase/editXRayAnalysis','OrthodonticCaseController@addXRayAnalysis');
//编辑诊断设计
Route::post('odtcase/editDiagnosticDesign','OrthodonticCaseController@addDiagnosticDesign');
//编辑治疗进展
Route::post('odtcase/editTreatmentProcess','OrthodonticCaseController@addTreatmentProcess');
//查询正畸病例
Route::get('odtcase/inquire','OrthodonticCaseController@inquire');
//删除正畸病历
Route::post('odtcase/deleteOrthodontics','OrthodonticCaseController@deleteOrthodontics');
//删除治疗进展
Route::post('odtcase/deleteTreatmentProcess','OrthodonticCaseController@deleteTreatmentProcess');
/*******************************************病例管理****************1*********************************/
//新增病例-选择服务内容信息查询
Route::get('case/seeService','CaseController@seeService');
//新增病例-1
Route::post('case/addEssentialInfo','CaseController@addEssentialInfo');
//新增病例-2
Route::post('case/addEssentialInfoSecond','CaseController@addEssentialInfoSecond');
Route::post('case/addEssentialInfoThird','CaseController@addEssentialInfoThird');
/*******************************************登录注册****************1*********************************/
//手机号注册
Route::post('/doctor/registerTel','DoctorController@registerTel');
//填写注册信息
Route::post('/doctor/registerInfo','DoctorController@registerInfo');
//登录
Route::post('/doctor/login','DoctorController@login');


