<?php

namespace App\Http\Controllers;

use App\Model\CaseHistory;
use App\Model\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Illuminate\Support\Facades\Validator;

class CaseController extends Controller
{


    /**
     * TODO:新增病例-选择服务内容信息查询
     */
    public function seeService()
    {
        try{
            $result =  Service::where('status','1')->get();
            if(!$result){
                return $this->errorResponse('占时没有数据');
            }
            return $this->successResponse('ok',$result);
        }catch (Exception $exception){
            return $this->errorResponse('操作有误');
        }
    }
    //TODO:新增病例-添加患者资料1

    /**
     * @param Request $request
     * @return string
     */
    public function addEssentialInfo(Request $request)
    {
        DB::beginTransaction();
        try{
            // 设置验证消息
            $messages = [
                'mobilephone.required' => '手机号码不能为空',
                'mobilephone.regex' => '请输入正确的手机号码',
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'mobilephone' => ['required','regex:/^1[34578]\d{9}$/'],

            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }
            $model = new CaseHistory;
            $model->doctor_id = $request->post('doctor_id');
            $model->service_id = $request->post('service_id');
            $model->name = $request->post('name');
            $model->sex = $request->post('sex');
            $model->birthday = $request->post('birthday');
            $model->id_number = $request->post('id_number');
            $model->mobilephone = $request->post('mobilephone');
            $model->province = $request->post('province');
            $model->city = $request->post('city');
            $model->id = $this->createArchivesNum();
            $model->create_time = time();
            $model->last_ip = $request->getClientIp();
            $model->save();

            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功');
        }catch ( Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();

        }
    }

    /**
     * TODO:生成档案编号
     * @return \Illuminate\Database\Eloquent\Model|mixed|null|string|static
     */
    public function createArchivesNum($table = 'sl_case_history')
    {
        $ArchivesNum = DB::table($table)->select('id')->orderBy('id','desc')->first();
        if($ArchivesNum != null ) {
            $ArchivesNum = $ArchivesNum->id;
            $ArchivesNum = "C".str_pad(intval(substr($ArchivesNum, -9))+1, 9, '0',STR_PAD_LEFT);
        } else {
            $ArchivesNum = 'C000000001';
        }
        return $ArchivesNum;
    }

}
