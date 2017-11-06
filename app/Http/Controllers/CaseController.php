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
            //id存在是修改反之是添加
            $id = $request->post('id');
            if($id){
                $model = CaseHistory::find($id);//修改
            }else{
                $model = new CaseHistory;//新增
                $case_id = $this->createArchivesNum();
                $model->id = $case_id ;
            }
            $model->doctor_id = $request->post('doctor_id');
            $model->service_id = $request->post('service_id');
            $model->name = $request->post('name');
            $model->sex = $request->post('sex');
            $model->birthday = $request->post('birthday');
            $model->id_number = $request->post('id_number');
            $model->mobilephone = $request->post('mobilephone');
            $model->province = $request->post('province');
            $model->city = $request->post('city');
            //主诉
            $model->complaint_options = $request->post('complaint_options');
            $model->other_options = $request->post('other_options');
            $model->create_time = time();
            $model->last_ip = $request->getClientIp();
            $model->save();
            //添加图片资料
            //id存在是修改反之是添加
            if($id){
                CaseHistoryImage::where('case_history_id',$id)->update([
                    'positive_photo' => $request->post('positive_photo'),
                    'side_photo' => $request->post('side_photo'),
                    'positive_smile_photo' => $request->post('positive_smile_photo'),
                    'upper_arch_photo' => $request->post('upper_arch_photo'),
                    'positive_45_photo' => $request->post('positive_45_photo'),
                    'under_arch_photo' => $request->post('under_arch_photo'),
                    'right_bite_photo' => $request->post('right_bite_photo'),
                    'positive_bite_photo' => $request->post('positive_bite_photo'),
                    'left_bite_photo' => $request->post('left_bite_photo'),
                    'panorama_photo' => $request->post('panorama_photo'),
                    'side_x_photo' => $request->post('side_x_photo'),
                    'positive_x_photo' => $request->post('positive_x_photo'),
                    'tooth_photo' => $request->post('tooth_photo'),
                    'cbct_joint_sagittal' => $request->post('cbct_joint_sagittal'),
                    'cbct_coronary_joint' => $request->post('cbct_coronary_joint'),
                    'cbct_anterior_teeth' => $request->post('cbct_anterior_teeth'),
                    'cbct_under_teeth' => $request->post('cbct_under_teeth'),
                    'abnormal_teeth' => $request->post('abnormal_teeth'),
                    'air_passage' => $request->post('air_passage'),
                    'other' => $request->post('other'),
                    'type' => '0',
                    'create_time' => time(),
                ]);//修改
            }else{
                $CaseHistoryImage =new CaseHistoryImage();//新增
                $CaseHistoryImage->case_history_id = $case_id;
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
                $CaseHistoryImage->abnormal_teeth = $request->post('abnormal_teeth');
                $CaseHistoryImage->air_passage = $request->post('air_passage');
                $CaseHistoryImage->other = $request->post('other');
                $CaseHistoryImage->type = '0';
                $CaseHistoryImage->create_time = time();
                $CaseHistoryImage->save();
            }
            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功');
        }catch ( Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();

        }
    }

    /**
     * TODO:新增病例-添加患者资料2
     * @param Request $request
     * @return string
     */
    public function addEssentialInfoSecond(Request $request){
        DB::beginTransaction();
        try{
            //添加资料
            $id = $request->post('id');
            $CaseHistory = CaseHistory::find($id);
            $CaseHistory->medical_history = $request->post('medical_history');
            $CaseHistory->face_type = $request->post('face_type');
            $CaseHistory->bone = $request->post('bone');
            $CaseHistory->growth_type = $request->post('growth_type');
            $CaseHistory->dental = $request->post('dental');
            $CaseHistory->anterior_overbite = $request->post('anterior_overbite');
            $CaseHistory->anterior_teeth_coverage = $request->post('anterior_teeth_coverage');
            $CaseHistory->congestion_degree_maxillary = $request->post('congestion_degree_maxillary');
            $CaseHistory->congestion_degree_mandible = $request->post('congestion_degree_mandible');
            $CaseHistory->other = $request->post('other');
            $CaseHistory->diagnosis_bone = $request->post('diagnosis_bone');
            $CaseHistory->diagnosis_dental = $request->post('diagnosis_dental');
            $CaseHistory->diagnosis_other = $request->post('diagnosis_other');
            $CaseHistory->last_time = time();
            $CaseHistory->save();
            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功');
        }catch ( Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();

        }
    }

    /**
     * TODO:新增病例-添加患者资料3
     * @param Request $request
     * @return string
     */
    public function addEssentialInfoThird(Request $request){
        DB::beginTransaction();
        try{
            //添加资料
            $id = $request->post('id');
            $CaseHistory = CaseHistory::find($id);
            $CaseHistory->treatment_face_type = $request->post('treatment_face_type');
            $CaseHistory->treatment_maxillary_midline = $request->post('treatment_maxillary_midline');
            $CaseHistory->treatment_mandibular_midline = $request->post('treatment_mandibular_midline');
            $CaseHistory->treatment_anterior_overbite = $request->post('treatment_anterior_overbite');
            $CaseHistory->treatment_anterior_teeth_coverage = $request->post('treatment_anterior_teeth_coverage');
            $CaseHistory->treatment_canine_relation_left = $request->post('treatment_canine_relation_left');
            $CaseHistory->treatment_canine_relation_right = $request->post('treatment_canine_relation_right');
            $CaseHistory->treatment_molar_relationship_left = $request->post('treatment_molar_relationship_left');
            $CaseHistory->treatment_molar_relationship_right = $request->post('treatment_molar_relationship_right');
            $CaseHistory->other_goals = $request->post('other_goals');
            $CaseHistory->other_content = $request->post('other_content');
            $CaseHistory->last_ip = $request->getClientIp();
            $CaseHistory->last_time = time();
            $CaseHistory->save();
            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功');
        }catch ( Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();

        }
    }


}
