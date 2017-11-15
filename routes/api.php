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
Route::get('/adminorder','TestController@order');
Route::get('/cxjz','TestController@cxjz');
Route::get('/yscx','TestController@yscx');
Route::get('/zjcx','TestController@zjcx');
/*******************************************公共接口****************1*********************************/
//文件上传接口
Route::post('file/upload','CommonController@uploadPictures');
Route::post('/test','CaseController@createArchivesNum');
Route::get('china/city', 'ChinaController@city');
Route::get('china/province', 'ChinaController@province');
Route::get('china/district', 'ChinaController@district');
/*******************************************正畸病历*************************************************/
Route::post('addInformation','OrthodonticCaseController@addInformation');
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
//查询治疗进展
Route::get('odtcase/inquireTreatmentProcess','OrthodonticCaseController@inquireTreatmentProcess');
//查询单个治疗进展详情
Route::get('odtcase/inquireOnlyOneTreatmentProcess','OrthodonticCaseController@inquireOnlyOneTreatmentProcess');
//变更服务
Route::post('odtcase/optionService','OrthodonticCaseController@optionService');

/*******************************************病例管理****************1*********************************/
//新增病例-选择服务内容信息查询
Route::get('case/seeService','CaseController@seeService');
//新增病例页面1
Route::post('case/addCaseInformationPage1','OrthodonticCaseController@addCaseInformationPage1');
//新增病例页面2
Route::post('case/addCaseInformationPage2','OrthodonticCaseController@addCaseInformationPage2');
//新增病例页面3
Route::post('case/addCaseInformationPage3','OrthodonticCaseController@addCaseInformationPage3');
////新增病例-1
//Route::post('case/addEssentialInfo','CaseController@addEssentialInfo');

////新增病例-2
//Route::post('case/addEssentialInfoSecond','CaseController@addEssentialInfoSecond');
//Route::post('case/addEssentialInfoThird','CaseController@addEssentialInfoThird');
/*******************************************登录注册****************1*********************************/
//手机号注册
Route::post('/doctor/registerTel','DoctorController@registerTel');
//填写注册信息
Route::post('/doctor/registerInfo','DoctorController@registerInfo');
//登录
Route::post('/doctor/login','DoctorController@login');
//退出
Route::post('/doctor/loginOut','DoctorController@loginOut');

/*******************************************医生接口****************1*********************************/
//查询信息
Route::get('/doctor/information','DoctorController@information');
//修改资料
Route::post('/doctor/updateInformation','DoctorController@updateInformation');
//查询该医生的所有病历
Route::get('/doctor/findOrthdonicCase','DoctorController@findOrthdonicCase');
//查询医生的所有订单
Route::get('/doctor/findOrders','DoctorController@findOrders');
//查询医生的未支付订单
Route::get('/doctor/findNoPayOrders','DoctorController@findNoPayOrders');
//查询医生的已支付订单
Route::get('/doctor/findPayCompletedOrders','DoctorController@findPayCompletedOrders');
//查询医生的已接单订单
Route::get('/doctor/findOrderTaking','DoctorController@findOrderTaking');
//查询医生的已结束订单
Route::get('/doctor/findEndOrders','DoctorController@findEndOrders');
//查询医生订单数量
Route::get('/doctor/findOrdersQuantity','DoctorController@findOrdersQuantity');
//搜索病历
Route::get('/doctor/searchOrthdonicCase','DoctorController@searchOrthdonicCase');
//修改密码
Route::post('/doctor/changePassword','DoctorController@changePassword');


/*******************************************专家接口****************1*********************************/
//查询信息
Route::get('/expert/information','ExpertController@information');
//修改资料
Route::post('/expert/updateInformation','ExpertController@updateInformation');
Route::get('createOrderNum','Controller@createOrderNum');
//方案审核
Route::post('expert/auditOpinion','ExpertController@auditOpinion');
//获取可接订单的数量
Route::get('/expert/orderNum','ExpertController@orderNum');
Route::post('/expert/orderReceiving','ExpertController@orderRec');
Route::get('/expert/myOrders','ExpertController@myOrders');
Route::get('/expert/findOrdersQuantity','ExpertController@findOrdersQuantity');
//修改密码
Route::post('/expert/changePassword','ExpertController@changePassword');
