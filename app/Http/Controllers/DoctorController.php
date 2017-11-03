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
     * TODO:注册
     * @param Request $request
     * @return string
     */
    public function register (Request $request)
    {
//        $data = Doctors::select('*')->orderBy('id', 'desc')->first();
//        echo json_encode($data);die;
        // 开启事物
        DB::beginTransaction();
        try {
            // 设置验证消息
            $messages = [
                'mobilephone.required' => '手机号码不能为空',
                'mobilephone.unique' => '手机号码已存在',
                'mobilephone.regex' => '请输入正确的手机号码',
                'password.required' => '密码不能为空',
                'password_confirmation.required' => '确认密码不能为空',
                'password.min' => '密码不能小于:min位',
                'password.confirmed' => '两次密码不一致',
                'password_confirmation.min' => '密码不能小于:min位',
                'province.required' => '请选择省份',
                'code_number.required' => '验证码不能为空'
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'mobilephone' => ['required','unique:sl_doctors','regex:/^1[34578]\d{9}$/'],
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required|min:6',
                'province' => 'required',
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
                'province' => $request->post('province'),
                'create_time' => time(),
                'last_ip' => $request->getClientIp()
            ]);
            // 提交事务
            DB::commit();
            return $this->successResponse('注册成功');
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
