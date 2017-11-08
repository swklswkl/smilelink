<?php

namespace App\Http\Controllers;

use App\Model\CaseHistoryImage;
use App\Model\Orthodontics;
use App\Model\OrthodonticsChiefComplaint;
use App\Model\OrthodonticsClinicalExamination;
use App\Model\OrthodonticsDiagnosticDesign;
use App\Model\OrthodonticsTreatmentProcess;
use App\Model\OrthodonticXAnalysis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrthodonticCaseController extends Controller
{
    /**
     * TODO:添加基本信息
     * @param Request $request
     * @return string
     */
    public function addInformation (Request $request)
    {
        $CaseController = new CaseController();
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
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
                $id = $CaseController->createArchivesNum('sl_orthodontics_case_history');
                Orthodontics::insert([
                    'id' => $id,
                    'doctor_id' => 1,
                    'name' => $request->post('name'),
                    'sex' => $request->post('sex'),
                    'birthday' => $request->post('birthday'),
                    'id_number' => $request->post('id_number'),
                    'mobilephone' => $request->post('mobilephone'),
                    'province' => $request->post('province'),
                    'city' => $request->post('city'),
                    'address' => $request->post('address')
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$id);
            }catch ( \Exception $e){
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
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
                $id = $CaseController->createArchivesNum('sl_orthodontics_case_history');
                Orthodontics::where(['id' => $request->post('id')])->update([
                    'name' => $request->post('name'),
                    'sex' => $request->post('sex'),
                    'birthday' => $request->post('birthday'),
                    'id_number' => $request->post('id_number'),
                    'mobilephone' => $request->post('mobilephone'),
                    'province' => $request->post('province'),
                    'city' => $request->post('city'),
                    'address' => $request->post('address')
                ]);
                DB::commit();
                return $this->successResponse('更新成功');
            }catch ( \Exception $e){
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }
    }

    /**
     * TODO:添加主诉和病史
     * @param Request $request
     * @return string
     */
    public function addChiefAndComplaint (Request $request)
    {
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
            DB::beginTransaction();
            try{
                OrthodonticsChiefComplaint::insert([
                    'orthodontics_id' => $request->post('orthodontics_id'),
                    'complained' => $request->post('complained')!='' ? '['.implode(',',$request->post('complained')).']' : '[]',
                    'other_complained' => $request->post('other_complained'),
                    'height' => $request->post('height'),
                    'weight' => $request->post('weight'),
                    'age' => $request->post('age'),
                    'menarche_age' => $request->post('menarche_age'),
                    'suffering_from_disease' => $request->post('suffering_from_disease'),
                    'disease_options' => $request->post('disease_options')!='' ? '['.implode(',',$request->post('disease_options')).']' : '[]',
                    'other_disease' => $request->post('other_disease'),
                    'allergy' => $request->post('allergy'),
                    'allergy_options' => $request->post('allergy_options')!='' ? '['.implode(',',$request->post('allergy_options')).']' : '[]',
                    'other_allergy' => $request->post('other_allergy'),
                    'keep_taking_medicine' => $request->post('keep_taking_medicine'),
                    'drugs_name' => $request->post('drugs_name'),
                    'pregnancy' => $request->post('pregnancy'),
                    'coordination_treatment' => $request->post('coordination_treatment'),
                    'tooth_trauma' => $request->post('tooth_trauma'),
                    'tooth_wrong_teeth' => $request->post('tooth_wrong_teeth'),
                    'oral_cavity_habits' => $request->post('oral_cavity_habits'),
                    'oral_cavity_options' => $request->post('oral_cavity_options')!='' ? '['.implode(',',$request->post('oral_cavity_options')).']' : '[]',
                    'other_oral_cavity' => $request->post('other_oral_cavity'),
                    'orthodontic_treatment' => $request->post('orthodontic_treatment'),
                    'orthodontic_treatment_remark' => $request->post('orthodontic_treatment_remark'),
                    'worry' => $request->post('worry'),
                    'worry_remark' => $request->post('worry_remark'),
                    'other' => $request->post('other')
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$request->post('orthodontics_id'));
            }catch ( \Exception $e){
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
            DB::beginTransaction();
            try{
                OrthodonticsChiefComplaint::where(['orthodontics_id' => $request->post('orthodontics_id')])->update([
                    'complained' => $request->post('complained')!='' ? '['.implode(',',$request->post('complained')).']' : '[]',
                    'other_complained' => $request->post('other_complained'),
                    'height' => $request->post('height'),
                    'weight' => $request->post('weight'),
                    'age' => $request->post('age'),
                    'menarche_age' => $request->post('menarche_age'),
                    'suffering_from_disease' => $request->post('suffering_from_disease'),
                    'disease_options' => $request->post('disease_options')!='' ? '['.implode(',',$request->post('disease_options')).']' : '[]',
                    'other_disease' => $request->post('other_disease'),
                    'allergy' => $request->post('allergy'),
                    'allergy_options' => $request->post('allergy_options')!='' ? '['.implode(',',$request->post('allergy_options')).']' : '[]',
                    'other_allergy' => $request->post('other_allergy'),
                    'keep_taking_medicine' => $request->post('keep_taking_medicine'),
                    'drugs_name' => $request->post('drugs_name'),
                    'pregnancy' => $request->post('pregnancy'),
                    'coordination_treatment' => $request->post('coordination_treatment'),
                    'tooth_trauma' => $request->post('tooth_trauma'),
                    'tooth_wrong_teeth' => $request->post('tooth_wrong_teeth'),
                    'oral_cavity_habits' => $request->post('oral_cavity_habits'),
                    'oral_cavity_options' => $request->post('oral_cavity_options')!='' ? '['.implode(',',$request->post('oral_cavity_options')).']' : '[]',
                    'other_oral_cavity' => $request->post('other_oral_cavity'),
                    'orthodontic_treatment' => $request->post('orthodontic_treatment'),
                    'orthodontic_treatment_remark' => $request->post('orthodontic_treatment_remark'),
                    'worry' => $request->post('worry'),
                    'worry_remark' => $request->post('worry_remark'),
                    'other' => $request->post('other')
                ]);
                DB::commit();
                return $this->successResponse('更新成功',$request->post('orthodontics_id'));
            }catch ( \Exception $e){
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }
    }

    /**
     * TODO:添加图片资料
     * @param Request $request
     * @return string
     */
    public function addImages (Request $request)
    {
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
            DB::beginTransaction();
            try{
                CaseHistoryImage::insert([
                    'orthodontics_id' => $request->post('orthodontics_id'),
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
                    'type' => '1',
                    'other' => $request->post('other'),
                    'create_time' => time()
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$request->post('orthodontics_id'));
            }catch (\Exception $e){
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
            DB::beginTransaction();
            try{
                CaseHistoryImage::where(['orthodontics_id' => $request->post('orthodontics_id')])->update([
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
                ]);
                DB::commit();
                return $this->successResponse('更新成功',$request->post('orthodontics_id'));
            }catch (\Exception $e){
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }
    }

    /**
     * TODO:添加临床检查
     * @param Request $request
     * @return string
     */
    public function addClinicalExamination (Request $request)
    {
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
            DB::beginTransaction();
            try
            {
                OrthodonticsClinicalExamination::insert([
                    'orthodontics_id' => $request->post('orthodontics_id'),
                    'symmetry' => $request->post('symmetry'),
                    'chin_point' => $request->post('chin_point'),
                    'teeth_open_lips' => $request->post('teeth_open_lips'),
                    'smile_reveal_gums' => $request->post('smile_reveal_gums'),
                    'plane' => $request->post('plane'),
                    'side_shape' => $request->post('side_shape'),
                    'nasolabial_angle' => $request->post('nasolabial_angle'),
                    'chin_point_view' => $request->post('chin_point_view'),
                    'periodontal_tissue' => $request->post('periodontal_tissue'),
                    'permanent_dentition' => $request->post('permanent_dentition'),
                    'deciduous_teeth' => $request->post('deciduous_teeth'),
                    'teeth_condition_other' => $request->post('teeth_condition_other'),
                    'opening_degree' => $request->post('opening_degree'),
                    'opening_shape' => $request->post('opening_shape'),
                    'left_sound' => $request->post('left_sound'),
                    'right_sound' => $request->post('right_sound'),
                    'left_friction_sound' => $request->post('left_friction_sound'),
                    'right_friction_sound' => $request->post('right_friction_sound'),
                    'left_pain' => $request->post('left_pain'),
                    'right_pain' => $request->post('right_pain'),
                    'joint_examination_other' => $request->post('joint_examination_other'),
                    'malocclusion_problem' => $request->post('malocclusion_problem'),
                    'anterior_teeth_covered' => $request->post('anterior_teeth_covered'),
                    'left_fangs' => $request->post('left_fangs'),
                    'right_fangs' => $request->post('right_fangs'),
                    'left_molar_fangs' => $request->post('left_molar_fangs'),
                    'right_molar_fangs' => $request->post('right_molar_fangs'),
                    'speed_curve' => $request->post('speed_curve'),
                    'deep_bite' => $request->post('deep_bite'),
                    'posterior_teeth' => $request->post('posterior_teeth'),
                    'maxillary_arch_teeth' => $request->post('maxillary_arch_teeth'),
                    'lower_dental_arch' => $request->post('lower_dental_arch'),
                    'maxillary_midline' => $request->post('maxillary_midline'),
                    'maxillary_midline_left' => $request->post('maxillary_midline_left'),
                    'maxillary_midline_right' => $request->post('maxillary_midline_right'),
                    'mandibular_midline' => $request->post('mandibular_midline'),
                    'crowd_degree_maxillary' => $request->post('crowd_degree_maxillary'),
                    'crowded_degree_jaw' => $request->post('crowded_degree_jaw'),
                    'bolton_anterior_teeth' => $request->post('bolton_anterior_teeth'),
                    'bolton_all_teeth' => $request->post('bolton_all_teeth')
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
            DB::beginTransaction();
            try
            {
                OrthodonticsClinicalExamination::where(['orthodontics_id' => $request->post('orthodontics_id')])->update([
                    'symmetry' => $request->post('symmetry'),
                    'chin_point' => $request->post('chin_point'),
                    'teeth_open_lips' => $request->post('teeth_open_lips'),
                    'smile_reveal_gums' => $request->post('smile_reveal_gums'),
                    'plane' => $request->post('plane'),
                    'side_shape' => $request->post('side_shape'),
                    'nasolabial_angle' => $request->post('nasolabial_angle'),
                    'chin_point_view' => $request->post('chin_point_view'),
                    'periodontal_tissue' => $request->post('periodontal_tissue'),
                    'permanent_dentition' => $request->post('permanent_dentition'),
                    'deciduous_teeth' => $request->post('deciduous_teeth'),
                    'teeth_condition_other' => $request->post('teeth_condition_other'),
                    'opening_degree' => $request->post('opening_degree'),
                    'opening_shape' => $request->post('opening_shape'),
                    'left_sound' => $request->post('left_sound'),
                    'right_sound' => $request->post('right_sound'),
                    'left_friction_sound' => $request->post('left_friction_sound'),
                    'right_friction_sound' => $request->post('right_friction_sound'),
                    'left_pain' => $request->post('left_pain'),
                    'right_pain' => $request->post('right_pain'),
                    'joint_examination_other' => $request->post('joint_examination_other'),
                    'malocclusion_problem' => $request->post('malocclusion_problem'),
                    'anterior_teeth_covered' => $request->post('anterior_teeth_covered'),
                    'left_fangs' => $request->post('left_fangs'),
                    'right_fangs' => $request->post('right_fangs'),
                    'left_molar_fangs' => $request->post('left_molar_fangs'),
                    'right_molar_fangs' => $request->post('right_molar_fangs'),
                    'speed_curve' => $request->post('speed_curve'),
                    'deep_bite' => $request->post('deep_bite'),
                    'posterior_teeth' => $request->post('posterior_teeth'),
                    'maxillary_arch_teeth' => $request->post('maxillary_arch_teeth'),
                    'lower_dental_arch' => $request->post('lower_dental_arch'),
                    'maxillary_midline' => $request->post('maxillary_midline'),
                    'maxillary_midline_left' => $request->post('maxillary_midline_left'),
                    'maxillary_midline_right' => $request->post('maxillary_midline_right'),
                    'mandibular_midline' => $request->post('mandibular_midline'),
                    'crowd_degree_maxillary' => $request->post('crowd_degree_maxillary'),
                    'crowded_degree_jaw' => $request->post('crowded_degree_jaw'),
                    'bolton_anterior_teeth' => $request->post('bolton_anterior_teeth'),
                    'bolton_all_teeth' => $request->post('bolton_all_teeth')
                ]);
                DB::commit();
                return $this->successResponse('更新成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }

    }

    /**
     * TODO:添加X光分析
     * @param Request $request
     * @return string
     */
    public function addXRayAnalysis (Request $request)
    {
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
            DB::beginTransaction();
            try
            {
                OrthodonticXAnalysis::insert([
                    'orthodontics_id' => $request->post('orthodontics_id'),
                    'surface_fault_slice' => $request->post('surface_fault_slice'),
                    'other_target' => $request->post('other_target')
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
            DB::beginTransaction();
            try
            {
                OrthodonticXAnalysis::where(['orthodontics_id' => $request->post('orthodontics_id')])->update([
                    'surface_fault_slice' => $request->post('surface_fault_slice'),
                    'other_target' => $request->post('other_target')
                ]);
                DB::commit();
                return $this->successResponse('更新成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }
    }

    /**
     * TODO:添加诊断设计
     * @param Request $request
     * @return string
     */
    public function addDiagnosticDesign (Request $request)
    {
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
            DB::beginTransaction();
            try
            {
                OrthodonticsDiagnosticDesign::insert([
                    'orthodontics_id' => $request->post('orthodontics_id'),
                    'positive' => $request->post('positive'),
                    'question_bone_nature' => $request->post('question_bone_nature'),
                    'growth_type' => $request->post('growth_type'),
                    'question_teeth_nature' => $request->post('question_teeth_nature'),
                    'question_anterior_teeth_overbite' => $request->post('question_anterior_teeth_overbite'),
                    'question_anterior_teeth_covered' => $request->post('question_anterior_teeth_covered'),
                    'diagnosis_bone_nature' => $request->post('diagnosis_bone_nature'),
                    'diagnosis_teeth_nature' => $request->post('diagnosis_teeth_nature'),
                    'other_diagnosis' => $request->post('other_diagnosis'),
                    'face_type' => $request->post('face_type'),
                    'maxillary_midline' => $request->post('maxillary_midline'),
                    'mandibular_midline' => $request->post('mandibular_midline'),
                    'target_anterior_teeth_overbite' => $request->post('target_anterior_teeth_overbite'),
                    'target_anterior_teeth_covered' => $request->post('target_anterior_teeth_covered'),
                    'left_fangs' => $request->post('left_fangs'),
                    'right_fangs' => $request->post('right_fangs'),
                    'left_molar_fangs' => $request->post('left_molar_fangs'),
                    'right_molar_fangs' => $request->post('right_molar_fangs'),
                    'teeth_arrangement' => $request->post('teeth_arrangement')!='' ? '['.implode(',',$request->post('teeth_arrangement')).']' : '[]',
                    'gap' => $request->post('gap'),
                    'treatment_other_target' => $request->post('treatment_other_target'),
                    'treatment_plan' => $request->post('treatment_plan')
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
            DB::beginTransaction();
            try
            {
                OrthodonticsDiagnosticDesign::where(['orthodontics_id' => $request->post('orthodontics_id')])->update([
                    'positive' => $request->post('positive'),
                    'question_bone_nature' => $request->post('question_bone_nature'),
                    'growth_type' => $request->post('growth_type'),
                    'question_teeth_nature' => $request->post('question_teeth_nature'),
                    'question_anterior_teeth_overbite' => $request->post('question_anterior_teeth_overbite'),
                    'question_anterior_teeth_covered' => $request->post('question_anterior_teeth_covered'),
                    'diagnosis_bone_nature' => $request->post('diagnosis_bone_nature'),
                    'diagnosis_teeth_nature' => $request->post('diagnosis_teeth_nature'),
                    'other_diagnosis' => $request->post('other_diagnosis'),
                    'face_type' => $request->post('face_type'),
                    'maxillary_midline' => $request->post('maxillary_midline'),
                    'mandibular_midline' => $request->post('mandibular_midline'),
                    'target_anterior_teeth_overbite' => $request->post('target_anterior_teeth_overbite'),
                    'target_anterior_teeth_covered' => $request->post('target_anterior_teeth_covered'),
                    'left_fangs' => $request->post('left_fangs'),
                    'right_fangs' => $request->post('right_fangs'),
                    'left_molar_fangs' => $request->post('left_molar_fangs'),
                    'right_molar_fangs' => $request->post('right_molar_fangs'),
                    'teeth_arrangement' => $request->post('teeth_arrangement')!='' ? '['.implode(',',$request->post('teeth_arrangement')).']' : '[]',
                    'gap' => $request->post('gap'),
                    'treatment_other_target' => $request->post('treatment_other_target'),
                    'treatment_plan' => $request->post('treatment_plan')
                ]);
                DB::commit();
                return $this->successResponse('更新成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }
    }

    /**
     * TODO:添加治疗过程（进展）
     * @param Request $request
     * @return string
     */
    public function addTreatmentProcess (Request $request)
    {
        // 不存在edit为新增
        if (is_null($request->post('edit')))
        {
            DB::beginTransaction();
            try
            {
                OrthodonticsTreatmentProcess::insert([
                    'orthodontics_id' => $request->post('orthodontics_id'),
                    'name' => $request->post('name'),
                    'content' => $request->post('content'),
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
                    'create_time' => time()
                ]);
                DB::commit();
                return $this->successResponse('添加成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }else{
            DB::beginTransaction();
            try
            {
                OrthodonticsTreatmentProcess::where(['id' => $request->post('id')])->update([
                    'name' => $request->post('name'),
                    'content' => $request->post('content'),
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
                ]);
                DB::commit();
                return $this->successResponse('更新成功',$request->post('orthodontics_id'));
            }catch (\Exception $e)
            {
                return $this->errorResponse('操作有误');
                DB::rollBack();
            }
        }
    }

    /**
     * TODO:查询正畸病历
     * @param Request $request
     * @return string
     */
    public function inquire (Request $request)
    {
        try
        {
           $orthodontics_id = $request->get('orthodontics_id');
           $data = Orthodontics::select(['id','name', 'sex', 'birthday', 'id_number', 'mobilephone', 'province', 'city', 'address'])->where(['id' => $orthodontics_id])
               ->with(['OrthodonticsChiefComplaint' => function ($query){
                   $query->select(['orthodontics_id','complained', 'other_complained', 'height', 'weight', 'age', 'menarche_age', 'suffering_from_disease', 'disease_options', 'other_disease', 'allergy', 'allergy_options', 'other_allergy', 'keep_taking_medicine', 'drugs_name', 'pregnancy', 'coordination_treatment', 'tooth_trauma', 'tooth_wrong_teeth', 'oral_cavity_habits', 'oral_cavity_options', 'other_oral_cavity', 'orthodontic_treatment', 'orthodontic_treatment_remark', 'worry', 'worry_remark', 'other']);
               },'CaseHistoryImages' => function ($query){
                   $query->select(['orthodontics_id','positive_photo', 'side_photo', 'positive_smile_photo', 'upper_arch_photo', 'positive_45_photo', 'under_arch_photo', 'right_bite_photo', 'positive_bite_photo', 'left_bite_photo', 'panorama_photo', 'side_x_photo', 'positive_x_photo', 'tooth_photo', 'cbct_joint_sagittal', 'cbct_coronary_joint', 'cbct_anterior_teeth', 'cbct_under_teeth', 'abnormal_teeth', 'air_passage', 'type', 'other']);
               },'OrthodonticsClinicalExamination' => function ($query){
                   $query->select(['orthodontics_id', 'symmetry', 'chin_point', 'teeth_open_lips', 'smile_reveal_gums', 'plane', 'side_shape', 'nasolabial_angle', 'chin_point_view', 'periodontal_tissue', 'permanent_dentition', 'deciduous_teeth', 'teeth_condition_other', 'opening_degree', 'opening_shape', 'left_sound', 'right_sound', 'left_friction_sound', 'right_friction_sound', 'left_pain', 'right_pain', 'joint_examination_other', 'malocclusion_problem', 'anterior_teeth_covered', 'left_fangs', 'right_fangs', 'left_molar_fangs', 'right_molar_fangs', 'speed_curve', 'deep_bite', 'posterior_teeth', 'maxillary_arch_teeth', 'lower_dental_arch', 'maxillary_midline', 'maxillary_midline_left', 'maxillary_midline_right', 'mandibular_midline', 'crowd_degree_maxillary', 'crowded_degree_jaw', 'bolton_anterior_teeth', 'bolton_all_teeth']);
               },'OrthodonticXAnalysis' => function ($query) {
                   $query->select(['orthodontics_id', 'surface_fault_slice', 'other_target']);
               },'OrthodonticsDiagnosticDesign' => function ($query) {
                   $query->select(['orthodontics_id', 'positive', 'question_bone_nature', 'growth_type', 'question_teeth_nature', 'question_anterior_teeth_overbite', 'question_anterior_teeth_covered', 'diagnosis_bone_nature', 'diagnosis_teeth_nature', 'other_diagnosis', 'face_type', 'maxillary_midline', 'mandibular_midline', 'target_anterior_teeth_overbite', 'target_anterior_teeth_covered', 'left_fangs', 'right_fangs', 'left_molar_fangs', 'right_molar_fangs', 'teeth_arrangement', 'gap', 'treatment_other_target', 'treatment_plan']);
               },'OrthodonticsTreatmentProcess' => function ($query) {
                   $query->select(['id', 'orthodontics_id', 'name', 'content', 'positive_photo', 'side_photo', 'positive_smile_photo', 'upper_arch_photo', 'positive_45_photo', 'under_arch_photo', 'right_bite_photo', 'positive_bite_photo', 'left_bite_photo', 'panorama_photo', 'side_x_photo', 'positive_x_photo', 'tooth_photo', 'cbct_joint_sagittal', 'cbct_coronary_joint', 'cbct_anterior_teeth', 'cbct_under_teeth', 'abnormal_teeth', 'air_passage', 'other','create_time']);
               }])->get();
            return $this->successResponse('成功',$data);
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    /**
     * TODO:删除正畸病历
     * @param Request $request
     * @return string
     */
    public function deleteOrthodontics (Request $request)
    {
        DB::beginTransaction();
        try
        {
            Orthodontics::where(['id' => $request->post('orthodontics_id')])->delete();
            OrthodonticsClinicalExamination::where(['orthodontics_id' => $request->post('orthodontics_id')])->delete();
            OrthodonticsChiefComplaint::where(['orthodontics_id' => $request->post('orthodontics_id')])->delete();
            CaseHistoryImage::where(['orthodontics_id' => $request->post('orthodontics_id')])->delete();
            OrthodonticXAnalysis::where(['orthodontics_id' => $request->post('orthodontics_id')])->delete();
            OrthodonticsTreatmentProcess::where(['orthodontics_id' => $request->post('orthodontics_id')])->delete();
            OrthodonticsDiagnosticDesign::where(['orthodontics_id' => $request->post('orthodontics_id')])->delete();
            DB::commit();
            return $this->successResponse('删除成功');
        }catch(\Exception $e)
        {
            return $this->errorResponse('操作有误');
            DB::rollBack();
        }
    }

    /**
     * TODO:删除治疗进展
     * @param Request $request
     * @return string
     */
    public function deleteTreatmentProcess (Request $request)
    {
        DB::beginTransaction();
        try
        {
            OrthodonticsTreatmentProcess::where(['id'=>$request->post('id')])->delete();
            DB::commit();
            return $this->successResponse('删除成功');
        }catch(\Exception $e)
        {
            return $this->errorResponse('操作有误');
            DB::rollBack();
        }
    }
}
