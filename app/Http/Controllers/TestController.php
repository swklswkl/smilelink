<?php

namespace App\Http\Controllers;

use App\Model\Doctors;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Orthodontics;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $data['id'] =  $request->input('id');
        $data['name'] =  $request->input('name');
        $data['mmm'] =  $request->input('mmm');
        $mdkey = $request->input('mdkey');
        $authEnd =  $this->auth($data,$mdkey);
        return $authEnd;
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
                    $query->select(['id', 'orthodontics_id', 'name', 'content', 'positive_photo', 'side_photo', 'positive_smile_photo', 'upper_arch_photo', 'positive_45_photo', 'under_arch_photo', 'right_bite_photo', 'positive_bite_photo', 'left_bite_photo', 'panorama_photo', 'side_x_photo', 'positive_x_photo', 'tooth_photo', 'cbct_joint_sagittal', 'cbct_coronary_joint', 'cbct_anterior_teeth', 'cbct_under_teeth', 'abnormal_teeth', 'air_passage', 'other']);
                }])->get()->toArray();
            return view('test',compact('data',$data[0]));
        }catch (\Exception $e)
        {
            return $this->errorResponse('操作有误');
        }
    }
}
