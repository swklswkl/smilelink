<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use App\Model\Experts;

use App\Model\Orders;
use App\Model\Orthodontics;
use App\Model\Service;

use App\Model\Program;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Validator;

class ExpertController extends Controller
{
    /**
     * TODO:查询专家信息
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function information (Request $request)
    {
        try
        {
            $data = Experts::where(['id'=>$request->get('id')])->get()->toArray();
            if (sizeof($data))
            {
                return $this->successResponse('查询成功',$data);
            }else{
                return $this->errorResponse('查询失败');
            }
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:修改专家信息(个人资料)
     * @param Request $request
     * @return string
     */
    public function updateInformation (Request $request)
    {
        DB::beginTransaction();
        try
        {
            $data = Experts::where(['id' => $request->post('id')])
                ->update([
                    'name' => $request->post('name'),
                    'sex' => $request->post('sex'),
                    'email' => $request->post('email'),
                    'birthday' => $request->post('birthday'),
                    'province' => $request->post('province'),
                    'city' => $request->post('city'),
                    'work_unit' => $request->post('work_unit'),
                    'certificate' => $request->post('certificate'),
                    'working_years' => $request->post('working_years'),
                    'status' => $request->post('status'),
                    'change_time' => time()
                ]);
            DB::commit();
            if ($data)
            {
                return $this->successResponse('更新成功');
            }else{
                return $this->errorResponse('更新失败');
            }
        }catch (\Exception $e)
        {
            DB::rollBack();
            return $this->errorResponse('操作有误');
        }
    }

    /***
     * TODO:查询可接单的订单
     * @param Request $request
     * @return $this
     */
    public function orderReceiving (Request $request)
    {
        //查询专家的所在地区
        $province = Experts::select(['province'])->where(['id'=>$request->session()->get('expert.id')])->get()->toArray()[0]['province'];
        $doctor_id = Doctors::select(['id'])->where(['province'=>$province])->get()->toArray();

        if ($doctor_id == [])
        {
            return view('smilelink.jiedan')->with('data',null);
        }else
        {
            $arrId = array();
            for ($i=0;$i<sizeof($doctor_id);$i++)
            {
                array_push($arrId,$doctor_id[$i]['id']);
            }

            $orders = Orders::where(['status'=>'1'])->whereIn('doctor_id',$arrId)->get()->toArray();

            for ($i=0;$i<sizeof($orders);$i++)
            {
                $oid = $orders[$i]['orthodontics_id'];
                $service_id = Orthodontics::select(['service_id'])
                    ->where(['id' => $oid])
                    ->get()
                    ->toArray();
                $service_id = explode(',',$service_id[0]['service_id']);
                $service_name = Service::select(['service_name'])->whereIn('id',$service_id)->get()->toArray();
                if ($service_name == [])
                {
                    $orders[$i]['service'] = '暂无服务内容';
                }else
                {
                    $orders[$i]['service'] = $service_name;
                }
            }
//            dd($orders);die;
            return view('smilelink.jiedan')->with('data',$orders);
        }
    }

    /***
     * TODO:查询可接单的数量
     * @param Request $request
     * @return string
     */
    public function orderNum (Request $request)
    {
        $province = Experts::select(['province'])->where(['id'=>$request->session()->get('expert.id')])->get()->toArray()[0]['province'];
        $doctor_id = Doctors::select(['id'])->where(['province'=>$province])->get()->toArray();
        if ($doctor_id == [])
        {
            return $this->successResponse('暂无订单',0);
        }else
        {
            $arrId = array();
            for ($i=0;$i<sizeof($doctor_id);$i++)
            {
                array_push($arrId,$doctor_id[$i]['id']);
            }
            $ordersNum = Orders::where(['status'=>'1'])->whereIn('doctor_id',$arrId)->count();
            return $this->successResponse('查询成功',$ordersNum);
        }
    }

    /***
     * TODO:接单
     * @param Request $request
     * @return string
     */
    public function orderRec (Request $request)
    {
        // 判断订单有没有被别的专家接走
        $status = Orders::select(['status'])->where(['orthodontics_id' => $request->post('orthodontics_id')])->get()->toArray()[0]['status'];
        if ($status != '1')
        {
            return $this->errorResponse('啊哦，订单被别的专家抢走了~',402);
        }else{
            Orders::where(['orthodontics_id'=>$request->post('orthodontics_id')])->update(['status'=>'2','expert_id'=>$request->post('expert_id')]);
            Orthodontics::where(['id'=>$request->post('orthodontics_id')])->update(['status'=>'3']);
            return $this->successResponse('接单成功');
        }
    }

    /***
     * TODO:查询个人资料
     * @param Request $request
     * @return $this
     */
    public function safeSet (Request $request)
    {
        $data = Experts::select(['name','sex','birthday','province','city'])->where(['id'=>$request->session()->get('expert.id')])->get()->toArray();
        return view('smilelink.safeSet2')->with('data',$data[0]);
    }

    public function myOrders (Request $request)
    {
        $all = Orders::where(['expert_id'=>$request->session()->get('expert.id')])->get()->toArray();
        if ($all == [])
        {
            $all = null;
        }
        for ($i=0;$i<sizeof($all);$i++)
        {
            $oid = $all[$i]['orthodontics_id'];
            $service_id = Orthodontics::select(['service_id'])
                ->where(['id' => $oid])
                ->get()
                ->toArray();
            $service_id = explode(',',$service_id[0]['service_id']);
            $service_name = Service::select(['service_name'])->whereIn('id',$service_id)->get()->toArray();
            if ($service_name == [])
            {
                $all[$i]['service'] = '暂无服务内容';
            }else
            {
                $all[$i]['service'] = $service_name;
            }
        }

        $yjd = Orders::where(['expert_id'=>$request->session()->get('expert.id'),'status' => '2'])->get()->toArray();
        if ($yjd == [])
        {
            $yjd = null;
        }
        for ($i=0;$i<sizeof($yjd);$i++)
        {
            $oid = $yjd[$i]['orthodontics_id'];
            $yjdservice_id = Orthodontics::select(['service_id'])
                ->where(['id' => $oid])
                ->get()
                ->toArray();
            $yjdservice_id = explode(',',$yjdservice_id[0]['service_id']);
            $yjdservice_name = Service::select(['service_name'])->whereIn('id',$yjdservice_id)->get()->toArray();
            if ($yjdservice_name == [])
            {
                $yjd[$i]['service'] = '暂无服务内容';
            }else
            {
                $yjd[$i]['service'] = $yjdservice_name;
            }
        }

        $ytjsj = Orders::where(['expert_id'=>$request->session()->get('expert.id'),'status' => '3'])->get()->toArray();
        if ($ytjsj == [])
        {
            $ytjsj = null;
        }
        for ($i=0;$i<sizeof($ytjsj);$i++)
        {
            $oid = $ytjsj[$i]['orthodontics_id'];
            $ytjsjservice_id = Orthodontics::select(['service_id'])
                ->where(['id' => $oid])
                ->get()
                ->toArray();
            $ytjsjservice_id = explode(',',$ytjsjservice_id[0]['service_id']);
            $ytjsjservice_name = Service::select(['service_name'])->whereIn('id',$ytjsjservice_id)->get()->toArray();
            if ($ytjsjservice_name == [])
            {
                $ytjsj[$i]['service'] = '暂无服务内容';
            }else
            {
                $ytjsj[$i]['service'] = $ytjsjservice_name;
            }
        }

        $yjs = Orders::where(['expert_id'=>$request->session()->get('expert.id'),'status' => '4'])->get()->toArray();
        if ($yjs == [])
        {
            $yjs = null;
        }
        for ($i=0;$i<sizeof($yjs);$i++)
        {
            $oid = $yjs[$i]['orthodontics_id'];
            $yjsservice_id = Orthodontics::select(['service_id'])
                ->where(['id' => $oid])
                ->get()
                ->toArray();
            $yjsservice_id = explode(',',$yjsservice_id[0]['service_id']);
            $yjsservice_name = Service::select(['service_name'])->whereIn('id',$yjsservice_id)->get()->toArray();
            if ($yjsservice_name == [])
            {
                $yjs[$i]['service'] = '暂无服务内容';
            }else
            {
                $yjs[$i]['service'] = $yjsservice_name;
            }
        }
        return view('smilelink.myOrder2')->with(['qbdd'=>$all,'yjd'=>$yjd,'ytjsj'=>$ytjsj,'yjs'=>$yjs]);
    }

    public function findOrdersQuantity (Request $request)
    {
        try {
            $allOrders = Orders::where(['expert_id' => $request->get('expert_id')])->count();
            $orderTaking = Orders::where(['expert_id' => $request->get('expert_id'), 'status' => '2'])->count();
            $subOrders = Orders::where(['expert_id' => $request->get('expert_id'), 'status' => '3'])->count();
            $endOrders = Orders::where(['expert_id' => $request->get('expert_id'), 'status' => '4'])->count();
            $data = [
                '全部订单' => $allOrders,
                '已接单' => $orderTaking,
                '已提交设计' => $subOrders,
                '已结束' => $endOrders
            ];
            return $this->successResponse('查询成功', $data);
        } catch (\Exception $e) {
            return $this->successResponse('操作有误');
        }
    }

    /**
     * TODO:专家审核
     * @param Request $request
     * @return string
     */
    public function auditOpinion(Request $request)
    {
//        //return $request->all();
        DB::beginTransaction();
        try
        {
            // 设置验证消息
            $messages = [
                'status.required' => '审核状态不能为空',
                'audit_opinion.required' => '审核内容不能为空'
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'status' => 'required',
                'audit_opinion' => 'required'
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors,402);
            }
            $result = Program::where(['orthodontics_id'=>$request->input('orthodontics_id'),
                'program_name'=>$request->input('program_name')]
            )->update([
                'status'=> $request->input('status'),
                'audit_opinion'=>$request->input('audit_opinion'),
                'opinion_time'=>time()
            ]);
            DB::commit();
            if($result){
                return $this->successResponse('保存成功');
            }else{
                return $this->errorResponse('保存失败');
            }
        }catch (Exception $e){
            return $this->errorResponse($e,402);
            DB::rollBack();
        }
    }

    /***
     * TODO:修改密码
     * @param Request $request
     * @return string
     */
    public function changePassword (Request $request)
    {
        try {
            // 设置验证消息
            $messages = [
                'password.required' => '原始密码不能为空',
                'newpassword.min' => '新密码不能小于:min位',
                'newpassword_confirmation.min' => '新密码不能小于:min位',
                'newpassword.required' => '新密码不能为空',
                'newpassword_confirmation.required' => '确认新密码不能为空',
                'newpassword.confirmed' => '两次密码不一致',
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'password' => 'required',
                'newpassword' => 'required|confirmed|min:6',
                'newpassword_confirmation' => 'required|min:6'
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors,402);
            }
            $data = Experts::select('name')->where(['id'=>$request->post('id'),'password'=>md5($request->post('password'))])->get()->toArray();

            if ($data == [])
            {
                return $this->errorResponse('原始密码错误',402);
            }else{
                $data = Experts::where(['id'=>$request->post('id')])->update(['password' => md5($request->post('newpassword'))]);
                if ($data)
                {
                    $request->session()->forget('doctor');
                    $request->session()->forget('expert');
                    return $this->successResponse('修改密码成功，请重新登陆');
                }else{
                    return $this->errorResponse('修改密码失败，请重试');
                }
            }
        } catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    public function commitAudit(Request $request)
    {
        //return $request->all();
        DB::beginTransaction();
        try
        {
            $a = $request->all('content');
            $b = sizeof($a['content']);
            // 设置验证消息
            $messages = [
                'content.required' => '方案内容不能为空',
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'content' => 'required',
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors,402);
            }
            for($i=0;$i<$b;$i++){
                $c = $i+1;
                $program_name = "专家方案".$c;
                $result = Program::insert([
                    'orthodontics_id'=> $request->input('orthodontics_id'),
                    'content'=>$a['content'][$i],
                    'program_name'=> $program_name,
                    'create_time'=> time(),
                    'type'=>'1'
                ]);
            }
            DB::commit();
            if($result){
                return $this->successResponse('提交成功');
            }else{
                return $this->errorResponse('提交失败');
            }
        }catch (Exception $e){
            return $this->errorResponse($e,402);
            DB::rollBack();
        }
    }
}
