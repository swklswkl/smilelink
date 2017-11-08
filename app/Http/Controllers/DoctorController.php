<?php

namespace App\Http\Controllers;

use App\Model\CaseHistory;
use App\Model\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class DoctorController extends Controller
{
    /**
     * TODO:注册(手机号)
     * @param Request $request
     * @return string
     */
    public function registerTel (Request $request)
    {
        // 开启事物
        DB::beginTransaction();
        try {
            // 设置验证消息
            $messages = [
                'mobilephone.required' => '手机号码不能为空',
                'mobilephone.unique' => '手机号码已存在',
                'mobilephone.regex' => '请输入正确的手机号码',
                'password.min' => '密码不能小于:min位',
                'password.required' => '密码不能为空',
                'password_confirmation.required' => '确认密码不能为空',
                'password.confirmed' => '两次密码不一致',
                'password_confirmation.min' => '密码不能小于:min位',
                'code_number.required' => '验证码不能为空'
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'mobilephone' => ['required','unique:sl_doctors','regex:/^1[34578]\d{9}$/'],
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'code_number' => 'required'
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }
            Doctors::insert([
                'mobilephone' => $request->post('mobilephone'),
                'password' => md5($request->post('password')),
                'create_time' => time(),
                'last_ip' => $request->getClientIp()
            ]);
            // 提交事务
            DB::commit();
            return $this->successResponse('注册成功,3秒后自动跳转到信息完善页面');
        }catch (\Exception $e)
        {
            // 回滚
            DB::rollBack();
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:注册(详细信息)
     * @param Request $request
     * @return string
     */
    public function registerInfo (Request $request)
    {
        // 开启事物
        DB::beginTransaction();
        try {
            // 设置验证消息
            $messages = [
                'name.required' => '请输入姓名',
                'province.required' => '请选择省份',
                'city.required' => '请选择城市',
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'province' => 'required',
                'city' => 'required',
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }
            Doctors::where(['mobilephone'=>$request->post('mobilephone')])->update([
                'name' => $request->post('name'),
                'sex' => $request->post('sex'),
                'email' => $request->post('email'),
                'province' => $request->post('province'),
                'city' => $request->post('city'),
                'town' => $request->post('town'),
                'address' => $request->post('address'),
                'birthday' => $request->post('birthday'),
                'certificate' => $request->post('certificate'),
                'work_unit' => $request->post('work_unit'),
                'working_years' => $request->post('working_years')
            ]);
            // 提交事务
            DB::commit();
            return $this->successResponse('信息完善成功');
        }catch (\Exception $e)
        {
            // 回滚
            DB::rollBack();
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:登录
     * @param Request $request
     * @return string
     */
    public function login (Request $request)
    {
        $mobilephone = $request->post('mobilephone');
        $password = bcrypt($request->post('password'));
        try {
            // 设置验证消息
            $messages = [
                'mobilephone.required' => '手机号码不能为空',
                'mobilephone.regex' => '请输入正确的手机号码',
                'password.required' => '密码不能为空',
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'mobilephone' => ['required','regex:/^1[34578]\d{9}$/'],
                'password' => 'required',
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }
            $result = Doctors::select('mobilephone')->where(['mobilephone' => $mobilephone,'password' => $password])->get();
            if (sizeof($result))
            {
                // 医生信息保存到session
                $request->session()->put('doctor.mobilephone',$result[0]['mobilephone']);
                $request->session()->put('doctor.id',$result[0]['id']);
                return $this->successResponse('登录成功',$result);
            }else{
                return $this->errorResponse('账号或密码错误');
            }
        }catch (\Exception $e)
        {
            return $this->errorResponse('登录失败');
        }
    }

}
