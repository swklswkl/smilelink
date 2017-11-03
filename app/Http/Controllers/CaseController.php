<?php

namespace App\Http\Controllers;

use App\Model\CaseHistory;
use App\Model\CaseHistoryImage;
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
            //主诉
            $model->complaint_options = $request->post('complaint_options');
            $model->other_options = $request->post('other_options');
            $model->create_time = time();
            $model->last_ip = $request->getClientIp();
            $model->save();
            //添加图片资料
            $CaseHistoryImage = new CaseHistoryImage();
            $CaseHistoryImage->case_history_id = $this->createArchivesNum();
            $CaseHistoryImage->positive_photo = $request->post('positive_photo');
            $CaseHistoryImage->side_photo = $request->post('side_photo');
            $CaseHistoryImage->positive_smile_photo = $request->post('positive_smile_photo');
            $CaseHistoryImage->upper_arch_photo = $request->post('upper_arch_photo');
            $CaseHistoryImage->positive_45_photo = $request->post('positive_45_photo');
            $CaseHistoryImage->under_arch_photo = $request->post('under_arch_photo');
            $CaseHistoryImage->right_bite_photo = $request->post('right_bite_photo');
            $CaseHistoryImage->positive_bite_photo = $request->post('positive_bite_photo');
            $CaseHistoryImage->left_bite_photo = $request->post('left_bite_photo');
            $CaseHistoryImage->panorama_photo = $request->post('panorama_photo');
            $CaseHistoryImage->side_x_photo = $request->post('side_x_photo');
            $CaseHistoryImage->positive_x_photo = $request->post('positive_x_photo');
            $CaseHistoryImage->tooth_photo = $request->post('tooth_photo');
            $CaseHistoryImage->cbct_joint_sagittal = $request->post('cbct_joint_sagittal');
            $CaseHistoryImage->cbct_coronary_joint = $request->post('cbct_coronary_joint');
            $CaseHistoryImage->cbct_anterior_teeth = $request->post('cbct_anterior_teeth');
            $CaseHistoryImage->cbct_under_teeth = $request->post('cbct_under_teeth');
            $CaseHistoryImage->air_passage = $request->post('air_passage');
            $CaseHistoryImage->other = $request->post('other');
            $CaseHistoryImage->create_time = time();
            $CaseHistoryImage->save();
            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功');
        }catch ( Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();

        }

    }

}
