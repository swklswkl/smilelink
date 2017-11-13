<?php

namespace App\Http\Controllers;

use App\Model\CaseHistory;
use App\Model\Doctors;
use App\Model\Experts;
use App\Model\Orders;
use App\Model\Orthodontics;
use App\Model\Service;
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
                return $this->errorResponse($errors,402);
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
        $password = md5($request->post('password'));
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

            if ($request->post('select') == 1)
            {
                $result = Doctors::select(['id','mobilephone'])->where(['mobilephone' => $mobilephone,'password'=>$password])->get()->toArray();
                if (sizeof($result))
                {
                    // 医生信息保存到session
                    $request->session()->put('doctor.mobilephone',$result[0]['mobilephone']);
                    $request->session()->put('doctor.id',$result[0]['id']);

                    return $this->successResponse('登录成功',$result);
                }else{
                    return $this->errorResponse('账号或密码错误',402);
                }
            }else{
                $result = Experts::select(['id','mobilephone'])->where(['mobilephone' => $mobilephone,'password'=>$password])->get()->toArray();
                if (sizeof($result))
                {
                    // 专家信息保存到session
                    $request->session()->put('expert.mobilephone',$result[0]['mobilephone']);
                    $request->session()->put('expert.id',$result[0]['id']);
                    return $this->successResponse('登录成功',$result);
                }else{
                    return $this->errorResponse('账号或密码错误',402);
                }
            }


        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    public function loginOut (Request $request)
    {
        try
        {
            $request->session()->forget('doctor');
            return $this->successResponse('退出成功');
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }
    /**
     * TODO:查询医生信息
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function information (Request $request)
    {
        try
        {
            $data = Doctors::where(['id'=>$request->get('id')])->get()->toArray();
            if (sizeof($data))
            {
                return $this->successResponse('查询成功',$data);
            }else{
                return $this->errorResponse('查询失败',402);
            }
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:修改医生信息(个人资料)
     * @param Request $request
     * @return string
     */
    public function updateInformation (Request $request)
    {
        DB::beginTransaction();
        try
        {
           $data = Doctors::where(['id' => $request->post('id')])
               ->update([
                   'name' => $request->post('name'),
                   'sex' => $request->post('sex'),
                   'email' => $request->post('email'),
                   'birthday' => $request->post('birthday'),
                   'province' => $request->post('province'),
                   'city' => $request->post('city'),
                   'work_unit' => $request->post('work_unit'),
                   'certificate' => $request->post('certificate'),
                   'working_years' => $request->post('working_years')
               ]);
            DB::commit();
            if ($data)
            {
                return $this->successResponse('更新成功');
            }else{
                return $this->errorResponse('更新失败',402);
            }
        }catch (\Exception $e)
        {
            DB::rollBack();
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询医生所有病历
     * @param Request $request
     * @return string
     */
    public function findOrthdonicCase (Request $request)
    {
        try
        {
            $data = Orthodontics::select(['id','name','create_time','status','service_id'])
                ->where(['doctor_id'=>$request->get('doctor_id')])
                ->paginate($request->get('show_num')=='' ? 20 : $request->get('show_num'))
                ->toArray();
            if ($data['data'] == [])
            {
                return $this->successResponse('暂无病历');
            }
            for ($i=0;$i<sizeof($data['data']);$i++)
            {
                $data['data'][$i]['create_time'] = date('Y-m-d H:i:s',$data['data'][$i]['create_time']);
                $service_id = $data['data'][$i]['service_id'];
                if (! strlen($service_id) < 1 && $service_id < 10)
                {
                    $service_id = explode(',',$service_id);
                    $service = array();
                    for ($j=0;$j<sizeof($service_id);$j++)
                    {
                        $sName =Service::select(['service_name as '.$j])
                            ->where(['id'=>$service_id[$j]])
                            ->get()
                            ->toArray();
                        $sName = $sName[0];
                        $service[$j] = $sName;
                        $data['data'][$i]['service_name'] = $service;
                    }
                }else{
                    $ser = Service::select(['service_name'])
                        ->where(['id'=>$data['data'][$i]['service_id']])
                        ->get()
                        ->toArray();
                    $data['data'][$i]['service_name'] = $ser;
                }
            }
            return $this->successResponse('查询成功',$data);

        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }

    }

    /**
     * TODO:医生搜索病历
     * @param Request $request
     * @return string
     */
    public function searchOrthdonicCase (Request $request)
    {
        try
        {
            $data = Orthodontics::select(['id','doctor_id','name','create_time','status','service_id'])
                ->where(function ($query) use ($request) {
                    $query->where('doctor_id',$request->get('doctor_id'))->where('id','like','%'.$request->get('content').'%');
                })->orWhere(function ($query) use ($request) {
                    $query->where('doctor_id',$request->get('doctor_id'))->where('name','like','%'.$request->get('content').'%');
                })->paginate($request->get('show_num')=='' ? 20 : $request->get('show_num'))->toArray();

            if ($data['data'] == [])
            {
                return $this->successResponse('未查询到相关病历');
            }
            for ($i=0;$i<sizeof($data['data']);$i++)
            {
                $data['data'][$i]['create_time'] = date('Y-m-d H:i:s',$data['data'][$i]['create_time']);
                $service_id = $data['data'][$i]['service_id'];
                if (! strlen($service_id) < 1 && $service_id < 10)
                {
                    $service_id = explode(',',$service_id);
                    $service = [];
                    for ($j=0;$j<sizeof($service_id);$j++)
                    {
                        $sName =Service::select(['service_name as '.$j])
                            ->where(['id'=>$service_id[$j]])
                            ->get()
                            ->toArray();
                        $sName = $sName[0];
                        $service[$j] = $sName;
                        $data['data'][$i]['service_name'] = $service;
                    }
                }else{
                    $ser = Service::select(['service_name'])
                        ->where(['id'=>$data['data'][$i]['service_id']])
                        ->get()
                        ->toArray();
                    $data['data'][$i]['service_name'] = $ser;
                }
            }
            return $this->successResponse('查询成功',$data);
        } catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询医生所有订单
     * @param Request $request
     * @return string
     */
    public function findOrders (Request $request)
    {
        try
        {
            $orders = Orders::select(['number','orthodontics_id','amount','create_time','status'])
                    ->where(['doctor_id' => $this->webOrApi($request->getRequestUri()) == 'api' ? $request->get('doctor_id') : $request->session()->get('doctor.id') ])
                    ->paginate($request->get('show_num')=='' ? 10 : $request->get('show_num'))
                    ->toArray();
            if ($orders['data'] == [])
            {
                if ($this->webOrApi($request->getRequestUri()) == 'api')
                {
                    return $this->successResponse('暂无订单');
                }else{
                    return view('smilelink.myOrder');
                }
            }
            for ($i=0;$i<sizeof($orders['data']);$i++)
            {
                $orders['data'][$i]['create_time'] = date('Y-m-d H:i:s',$orders['data'][$i]['create_time']);
                $oid = $orders['data'][$i]['orthodontics_id'];
                $data = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                if ($data == [])
                {
                    $orders['data'][$i]['service'] = '暂无服务内容';
                }else
                {
                    for ($j=0;$j<sizeof($data);$j++)
                    {
                        $service_id = $data[$j]['service_id'];
                        if (! strlen($service_id) < 1 && $service_id < 10)
                        {
                            $service_id = explode(',',$service_id);
                            $service = [];
                            for ($k=0;$k<sizeof($service_id);$k++)
                            {
                                $sName = Service::select(['service_name'])
                                    ->where(['id'=>$service_id[$k]])
                                    ->get()
                                    ->toArray();
                                $sName = $sName[0];
                                $service[$k] = $sName;

                                $data[$j]['service_name'] = $service;
                            }
                        }else{
                            $ser = Service::select(['service_name'])
                                ->where(['id'=>$data[$j]['service_id']])
                                ->get()
                                ->toArray();
                            $data[$j]['service_name'] = $ser;
                        }
                    }

                    $orders['data'][$i]['service'] = $data;
                    unset($orders['data'][$i]['service'][0]['service_id']);
                    $orders['data'][$i]['service'] = $orders['data'][$i]['service'][0]['service_name'];
                }
            }
            if ($this->webOrApi($request->getRequestUri()) == 'api')
            {
                return $this->successResponse('查询',$orders);
            }else{
                return view('smilelink.myOrder')->with('data',$orders);
            }
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询未支付的订单
     * @param Request $request
     * @return string
     */
    public function findNoPayOrders (Request $request)
    {
        try
        {
            $orders = Orders::select(['number','orthodontics_id','amount','create_time','status'])
                ->where(['doctor_id' => $request->get('doctor_id'),'status'=>'0'])
                ->paginate($request->get('show_num')=='' ? 10 : $request->get('show_num'))
                ->toArray();
            if ($orders['data'] == [])
            {
                return $this->successResponse('暂无订单');
            }
            for ($i=0;$i<sizeof($orders['data']);$i++)
            {
                $orders['data'][$i]['create_time'] = date('Y-m-d H:i:s',$orders['data'][$i]['create_time']);
                $oid = $orders['data'][$i]['orthodontics_id'];
                $data = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                if ($data == [])
                {
                    $orders['data'][$i]['service'] = '暂无服务内容';
                }else
                {
                    for ($j=0;$j<sizeof($data);$j++)
                    {
                        $service_id = $data[$j]['service_id'];
                        if (! strlen($service_id) < 1 && $service_id < 10)
                        {
                            $service_id = explode(',',$service_id);
                            $service = [];
                            for ($k=0;$k<sizeof($service_id);$k++)
                            {
                                $sName = Service::select(['service_name as '.$k])
                                    ->where(['id'=>$service_id[$k]])
                                    ->get()
                                    ->toArray();
                                $sName = $sName[0];
                                $service[$k] = $sName;
                                $data[$j]['service_name'] = $service;
                            }
                        }else{
                            $ser = Service::select(['service_name'])
                                ->where(['id'=>$data[$j]['service_id']])
                                ->get()
                                ->toArray();
                            $data[$j]['service_name'] = $ser;
                        }
                    }

                    $orders['data'][$i]['service'] = $data;
                    unset($orders['data'][$i]['service'][0]['service_id']);
                    $orders['data'][$i]['service'] = $orders['data'][$i]['service'][0]['service_name'];
                }
            }
            return $this->successResponse('查询成功',$orders);
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询已支付的订单
     * @param Request $request
     * @return string
     */
    public function findPayCompletedOrders (Request $request)
    {
        try
        {
            $orders = Orders::select(['number','orthodontics_id','amount','create_time','status'])
                ->where(['doctor_id' => $request->get('doctor_id'),'status'=>'1'])
                ->paginate($request->get('show_num')=='' ? 10 : $request->get('show_num'))
                ->toArray();
            if ($orders['data'] == [])
            {
                return $this->successResponse('暂无订单');
            }
            for ($i=0;$i<sizeof($orders['data']);$i++)
            {
                $orders['data'][$i]['create_time'] = date('Y-m-d H:i:s',$orders['data'][$i]['create_time']);
                $oid = $orders['data'][$i]['orthodontics_id'];
                $data = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                if ($data == [])
                {
                    $orders['data'][$i]['service'] = '暂无服务内容';
                }else
                {
                    for ($j=0;$j<sizeof($data);$j++)
                    {
                        $service_id = $data[$j]['service_id'];
                        if (! strlen($service_id) < 1 && $service_id < 10)
                        {
                            $service_id = explode(',',$service_id);
                            $service = [];
                            for ($k=0;$k<sizeof($service_id);$k++)
                            {
                                $sName = Service::select(['service_name as '.$k])
                                    ->where(['id'=>$service_id[$k]])
                                    ->get()
                                    ->toArray();
                                $sName = $sName[0];
                                $service[$k] = $sName;
                                $data[$j]['service_name'] = $service;
                            }
                        }else{
                            $ser = Service::select(['service_name'])
                                ->where(['id'=>$data[$j]['service_id']])
                                ->get()
                                ->toArray();
                            $data[$j]['service_name'] = $ser;
                        }
                    }

                    $orders['data'][$i]['service'] = $data;
                    unset($orders['data'][$i]['service'][0]['service_id']);
                    $orders['data'][$i]['service'] = $orders['data'][$i]['service'][0]['service_name'];
                }
            }
            return $this->successResponse('查询成功',$orders);
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询已接单的订单
     * @param Request $request
     * @return string
     */
    public function findOrderTaking (Request $request)
    {
        try
        {
            $orders = Orders::select(['number','orthodontics_id','amount','create_time','status'])
                ->where(['doctor_id' => $request->get('doctor_id'),'status'=>'2'])
                ->paginate($request->get('show_num')=='' ? 10 : $request->get('show_num'))
                ->toArray();
            if ($orders['data'] == [])
            {
                return $this->successResponse('暂无订单');
            }
            for ($i=0;$i<sizeof($orders['data']);$i++)
            {
                $orders['data'][$i]['create_time'] = date('Y-m-d H:i:s',$orders['data'][$i]['create_time']);
                $oid = $orders['data'][$i]['orthodontics_id'];
                $data = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                if ($data == [])
                {
                    $orders['data'][$i]['service'] = '暂无服务内容';
                }else
                {
                    for ($j=0;$j<sizeof($data);$j++)
                    {
                        $service_id = $data[$j]['service_id'];
                        if (! strlen($service_id) < 1 && $service_id < 10)
                        {
                            $service_id = explode(',',$service_id);
                            $service = [];
                            for ($k=0;$k<sizeof($service_id);$k++)
                            {
                                $sName = Service::select(['service_name as '.$k])
                                    ->where(['id'=>$service_id[$k]])
                                    ->get()
                                    ->toArray();
                                $sName = $sName[0];
                                $service[$k] = $sName;
                                $data[$j]['service_name'] = $service;
                            }
                        }else{
                            $ser = Service::select(['service_name'])
                                ->where(['id'=>$data[$j]['service_id']])
                                ->get()
                                ->toArray();
                            $data[$j]['service_name'] = $ser;
                        }
                    }

                    $orders['data'][$i]['service'] = $data;
                    unset($orders['data'][$i]['service'][0]['service_id']);
                    $orders['data'][$i]['service'] = $orders['data'][$i]['service'][0]['service_name'];
                }
            }
            return $this->successResponse('查询成功',$orders);
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询已提交设计的订单
     * @param Request $request
     * @return string
     */
    public function findSubOrders (Request $request)
    {
        try
        {
            $orders = Orders::select(['number','orthodontics_id','amount','create_time','status'])
                ->where(['doctor_id' => $request->get('doctor_id'),'status'=>'3'])
                ->paginate($request->get('show_num')=='' ? 10 : $request->get('show_num'))
                ->toArray();
            if ($orders['data'] == [])
            {
                return $this->successResponse('暂无订单');
            }
            for ($i=0;$i<sizeof($orders['data']);$i++)
            {
                $orders['data'][$i]['create_time'] = date('Y-m-d H:i:s',$orders['data'][$i]['create_time']);
                $oid = $orders['data'][$i]['orthodontics_id'];
                $data = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                if ($data == [])
                {
                    $orders['data'][$i]['service'] = '暂无服务内容';
                }else
                {
                    for ($j=0;$j<sizeof($data);$j++)
                    {
                        $service_id = $data[$j]['service_id'];
                        if (! strlen($service_id) < 1 && $service_id < 10)
                        {
                            $service_id = explode(',',$service_id);
                            $service = [];
                            for ($k=0;$k<sizeof($service_id);$k++)
                            {
                                $sName = Service::select(['service_name as '.$k])
                                    ->where(['id'=>$service_id[$k]])
                                    ->get()
                                    ->toArray();
                                $sName = $sName[0];
                                $service[$k] = $sName;
                                $data[$j]['service_name'] = $service;
                            }
                        }else{
                            $ser = Service::select(['service_name'])
                                ->where(['id'=>$data[$j]['service_id']])
                                ->get()
                                ->toArray();
                            $data[$j]['service_name'] = $ser;
                        }
                    }

                    $orders['data'][$i]['service'] = $data;
                    unset($orders['data'][$i]['service'][0]['service_id']);
                    $orders['data'][$i]['service'] = $orders['data'][$i]['service'][0]['service_name'];
                }
            }
            return $this->successResponse('查询成功',$orders);
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询已结束的订单
     * @param Request $request
     * @return string
     */
    public function findEndOrders (Request $request)
    {
        try
        {
            $orders = Orders::select(['number','orthodontics_id','amount','create_time','status'])
                ->where(['doctor_id' => $request->get('doctor_id'),'status'=>'4'])
                ->paginate($request->get('show_num')=='' ? 10 : $request->get('show_num'))
                ->toArray();
            if ($orders['data'] == [])
            {
                return $this->successResponse('暂无订单');
            }
            for ($i=0;$i<sizeof($orders['data']);$i++)
            {
                $orders['data'][$i]['create_time'] = date('Y-m-d H:i:s',$orders['data'][$i]['create_time']);
                $oid = $orders['data'][$i]['orthodontics_id'];
                $data = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                if ($data == [])
                {
                    $orders['data'][$i]['service'] = '暂无服务内容';
                }else
                {
                    for ($j=0;$j<sizeof($data);$j++)
                    {
                        $service_id = $data[$j]['service_id'];
                        if (! strlen($service_id) < 1 && $service_id < 10)
                        {
                            $service_id = explode(',',$service_id);
                            $service = [];
                            for ($k=0;$k<sizeof($service_id);$k++)
                            {
                                $sName = Service::select(['service_name as '.$k])
                                    ->where(['id'=>$service_id[$k]])
                                    ->get()
                                    ->toArray();
                                $sName = $sName[0];
                                $service[$k] = $sName;
                                $data[$j]['service_name'] = $service;
                            }
                        }else{
                            $ser = Service::select(['service_name'])
                                ->where(['id'=>$data[$j]['service_id']])
                                ->get()
                                ->toArray();
                            $data[$j]['service_name'] = $ser;
                        }
                    }

                    $orders['data'][$i]['service'] = $data;
                    unset($orders['data'][$i]['service'][0]['service_id']);
                    $orders['data'][$i]['service'] = $orders['data'][$i]['service'][0]['service_name'];
                }
            }
            return $this->successResponse('查询成功',$orders);
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:查询订单数量
     * @param Request $request
     * @return string
     */
    public function findOrdersQuantity (Request $request)
    {
        try
        {
            $allOrders = Orders::where(['doctor_id' => $request->get('doctor_id')])->count();
            $noPay = Orders::where(['doctor_id' => $request->get('doctor_id'),'status' => '0'])->count();
            $payCompleted = Orders::where(['doctor_id' => $request->get('doctor_id'),'status' => '1'])->count();
            $orderTaking = Orders::where(['doctor_id' => $request->get('doctor_id'),'status' => '2'])->count();
            $subOrders = Orders::where(['doctor_id' => $request->get('doctor_id'),'status' => '3'])->count();
            $endOrders = Orders::where(['doctor_id' => $request->get('doctor_id'),'status' => '4'])->count();
            $data = [
                '全部订单' => $allOrders,
                '待付款' => $noPay,
                '已付款' => $payCompleted,
                '已接单' => $orderTaking,
                '已提交设计' => $subOrders,
                '已结束' => $endOrders
            ];
            return $this->successResponse('查询成功',$data);
        }catch (\Exception $e)
        {
            return $this->successResponse('操作有误');
        }
    }

}
