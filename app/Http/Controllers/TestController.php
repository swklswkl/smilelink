<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use App\Model\Experts;
use App\Model\Orders;
use App\Model\OrthodonticsTreatmentProcess;
use App\Model\Service;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Orthodontics;
use Hyperbolaa\Alisms;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $alisms = app('alisms.note');
        $flag = $alisms->send('register','17717454324',['code'=>'456789']);//code 为模板中的变量名
        if($flag === true){
            //todo 发送成功处理
            return $this->successResponse('发送成功');
        }else{
            return $this->errorResponse(dump($flag));
        }
    }

    public function cx (Request $request)
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
                }])->get()->toArray();
            return view('admin.test',compact('data',$data[0]));
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    public function cxjz (Request $request)
    {
        try
        {
           $data = OrthodonticsTreatmentProcess::where(['id'=>$request->get('id')])->get()->toArray();
            return view('admin.process',compact('data',$data[0]));
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    public function yscx (Request $request)
    {
        try
        {
            $data = Doctors::where(['id'=>$request->get('id')])->get()->toArray();
            return view('admin.doc',compact('data',$data[0]));
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }

    public function zjcx (Request $request)
    {
        try
        {
            $data = Experts::where(['id'=>$request->get('id')])->get()->toArray();
            return view('admin.exp',compact('data',$data[0]));
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }
    public function xzys (Request $request)
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
                'name.required' => '请输入姓名',
                'province.required' => '请选择省份',
                'city.required' => '请选择城市',
            ];
            // 设置验证规则
            $validator = Validator::make($request->all(),[
                'mobilephone' => ['required','unique:sl_doctors','regex:/^1[34578]\d{9}$/'],
                'password' => 'required|min:6|confirmed',
                'name' => 'required',
                'province' => 'required',
                'city' => 'required',
            ],$messages);
            if ($validator->fails())
            {
                $errors = $validator->errors();
                return $this->errorResponse($errors);
            }
            Doctors::inster([
                'mobilephone' => $request->post('mobilephone'),
                'password' => $request->post('password'),
                'name' => $request->post('name'),
                'sex' => $request->post('sex'),
                'email' => $request->post('email'),
                'province' => $request->post('province'),
                'city' => $request->post('city'),
                'birthday' => $request->post('birthday'),
                'certificate' => $request->post('certificate'),
                'work_unit' => $request->post('work_unit'),
                'working_years' => $request->post('working_years')
            ]);
            // 提交事务
            DB::commit();
            return $this->successResponse('新增成功');
        }catch (\Exception $e)
        {
            // 回滚
            DB::rollBack();
            return $this->errorResponse('操作有误');
        }
    }

    public function order (Request $request)
    {
        $data = Orders::where(['number'=>$request->get('number')])->get()->toArray();
        if ( intval($data[0]['status']>=2) )
        {
            $expert_name = Experts::select(['id','name'])->where(['id'=>$data[0]['expert_id']])->get()->toArray();
        }else{
            $expert_name = '';
        }
        $province = Doctors::select(['id','province','name'])->where(['id'=>$data[0]['doctor_id']])->get()->toArray();
        $service_id = Orthodontics::select(['service_id'])->where(['id' => $data[0]['orthodontics_id']])->get()->toArray()[0]['service_id'];
        if (strlen($service_id)>1)
        {
            $service = explode(',',$service_id);
        }else{
            $service[0] = $service_id;
        }
        $data2 = Service::select('service_name')->whereIn('id',$service)->get()->toArray();
        $name='';
        for ($i=0;$i<sizeof($data2);$i++)
        {
            $name.=$data2[$i]['service_name'].'&ensp;&ensp;';
        }
        return view('admin.order')->with(['data'=>$data,'service_name'=>$name,'province'=>$province,'expert_name'=>$expert_name]);
    }

}
