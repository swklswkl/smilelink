<?php

namespace App\Http\Controllers;

use App\Model\Orthodontics;
use App\Model\OrthodonticsChiefComplaint;
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
        return $this->successResponse('添加成功',$id);
    }catch ( \Exception $e){
        return $this->errorResponse('操作有误');
        DB::rollBack();
    }
}


    public function addChiefAndComplaint (Request $request)
    {
        DB::beginTransaction();
        try{
            OrthodonticsChiefComplaint::insert([
                'orthodontics_id' => $request->post('orthodontics_id'),
                'complained' => '['.implode(',',$request->post('complained')).']',
                'other_complained' => $request->post('other_complained'),
                'height' => $request->post('height'),
                'weight' => $request->post('weight'),
                'age' => $request->post('age'),
                'menarche_age' => $request->post('menarche_age'),
                'suffering_from_disease' => $request->post('suffering_from_disease'),
                'disease_options' => '['.implode(',',$request->post('disease_options')).']',
                'other_disease' => $request->post('other_disease'),
                'allergy' => $request->post('allergy'),
                'allergy_options' => '['.implode(',',$request->post('allergy_options')).']',
                'other_allergy' => $request->post('other_allergy'),
                'keep_taking_medicine' => $request->post('keep_taking_medicine'),
                'drugs_name' => $request->post('drugs_name'),
                'pregnancy' => $request->post('pregnancy'),
                'coordination_treatment' => $request->post('coordination_treatment'),
                'tooth_trauma' => $request->post('tooth_trauma'),
                'tooth_wrong_teeth' => $request->post('tooth_wrong_teeth'),
                'oral_cavity_habits' => $request->post('oral_cavity_habits'),
                'oral_cavity_options' => '['.implode(',',$request->post('oral_cavity_options')).']',
                'other_oral_cavity' => $request->post('other_oral_cavity'),
                'orthodontic_treatment' => $request->post('orthodontic_treatment'),
                'orthodontic_treatment_remark' => $request->post('orthodontic_treatment_remark'),
                'worry' => $request->post('worry'),
                'worry_remark' => $request->post('worry_remark'),
                'other' => $request->post('other')
            ]);
            // 提交事务
            DB::commit();
            return $this->successResponse('添加成功',$request->post('orthodontics_id'));
        }catch ( \Exception $e){
            return $this->errorResponse('操作有误');
            DB::rollBack();
        }
    }
}
