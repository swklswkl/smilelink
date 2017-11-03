<?php

namespace App\Http\Controllers;

use App\Model\Orthodontics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrthodonticCaseController extends Controller
{

    public function addInformation (Request $request)
    {
        $CaseController = new CaseController();
        DB::beginTransaction();
        try{
            // 设置验证消息
            $messages = [
                'name.required' => '患者姓名不能为空',
                'id_number.required' => '身份证号码不能为空',
                'birthday.required' => '出生年月日不能为空',
                'mobilephone.required' => '手机号码不能为空',
                'mobilephone.regex' => '请输入正确的手机号码'
            ];
            // 设置验证规则
            $validator = \Validator::make($request->all(),[
                'mobilephone' => ['required','regex:/^1[34578]\d{9}$/'],
                'name' => 'required',
                'id_number' => 'required',
                'birthday' => 'required'
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }
            Orthodontics::insert([
                'id' => $CaseController->createArchivesNum('sl_orthodontics_case_history'),
                'doctor_id' => $request->session()->get('doctor.id'),
                'name' => $request->post('name'),
                'sex' => $request->post('sex'),
                'birthday' => $request->post('birthday'),
                'id_number' => $request->post('id_number'),
                'mobilephone' => $request->post('mobilephone'),
                'province' => $request->post('province'),
                'city' => $request->post('city'),
                'address' => $request->post('address')
            ]);
            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功');
        }catch ( \Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();
        }
    }
}
