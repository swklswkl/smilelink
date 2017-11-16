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
/*-------------------------------首页模板-------------------------------*/
Route::get('/', function () {
    return view('smilelink.index');
});
/*-----------------------------账号模板-----------------------------*/
Route::get('login', function () {
    return view('smilelink.logIn');
});
Route::get('register', function () {
    return view('smilelink.register');
});
Route::get('forgetPassword', function () {
    return view('smilelink.forgetPassword');
});
Route::get('registerSuccess', function () {
    return view('smilelink.registerSuccess');
});
Route::get('registerTel', function () {
    return view('smilelink.registerTel');
});
/*-----------------------------医生病例模板-----------------------------*/

/*-------------------------------首页接口-------------------------------*/


/*-------------------------------测试接口-------------------------------*/

Route::get('caseManage','OrthodonticCaseController@inquire');

//医生中间件
Route::group(['middleware'=> 'login.doctor'],function () {
    Route::get('caseManage','OrthodonticCaseController@inquire');
    Route::get('caseManagement', function () {
        return view('smilelink.caseManagement');
    });
    Route::get('createCase', function () {
        return view('smilelink.createCase');
    });
//新增正畸病例模板
    Route::get('createZhenJiCaseOne', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseOne');
    });
    Route::get('createZhenJiCaseTwo', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseTwo');
    });
    Route::get('createZhenJiCaseThree', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseThree');
    });
    Route::get('createZhenJiCaseFour', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseFour');
    });
    Route::get('createZhenJiCaseFif', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseFif');
    });
    Route::get('createZhenJiCaseSix', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseSix');
    });
    Route::get('createZhenJiCaseSeven', function () {
        return view('smilelink.createZhenJiCase.createZhenJiCaseSeven');
    });
//治疗过程-编辑
    Route::get('createZhenJiCaseSeven/edit', function () {
        return view('smilelink.createZhenJiCase.compile');
    });
//治疗过程-查看
    Route::get('createZhenJiCaseSeven/check', function () {
        return view('smilelink.createZhenJiCase.look');
    });
//新增病例1模板
    Route::get('caseOne', function () {
        return view('smilelink.createCase.case1');
    });
    Route::get('caseTwo', function () {
        return view('smilelink.createCase.case2');
    });
    Route::get('caseThree', function () {
        return view('smilelink.createCase.case3');
    });
    Route::get('myOrders','DoctorController@all');
    Route::get('safeSet','DoctorController@safeSet');
    Route::get('editCase1','OrthodonticCaseController@page1');
    Route::get('editCase2','OrthodonticCaseController@page2');
    Route::get('editCase3','OrthodonticCaseController@page3');
    Route::get('editCase4','OrthodonticCaseController@page4');
    Route::get('editCase5','OrthodonticCaseController@page5');
    Route::get('editCase6','OrthodonticCaseController@page6');
    Route::get('editCase7','OrthodonticCaseController@page7');
});

Route::group(['middleware' => 'login.expert'],function () {
    Route::get('orderReceiving','ExpertController@orderReceiving');
    Route::get('caseManage2','OrthodonticCaseController@inquire');
    Route::get('safeSSet','ExpertController@safeSet');
    Route::get('myOrrders','ExpertController@myOrders');
});