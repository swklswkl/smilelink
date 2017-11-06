<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property \Illuminate\Database\Eloquent\Model|mixed|null|string|static case_history_id
 * @property array|string positive_photo
 * @property array|string side_photo
 * @property int $id
 * @property mixed $case_history
 * @property array|string positive_smile_photo
 * @property array|string upper_arch_photo
 * @property array|string positive_45_photo
 * @property array|string under_arch_photo
 * @property array|string right_bite_photo
 * @property array|string positive_bite_photo
 * @property array|string left_bite_photo
 * @property array|string panorama_photo
 * @property array|string side_x_photo
 * @property array|string cbct_joint_sagittal
 * @property array|string tooth_photo
 * @property array|string positive_x_photo
 * @property array|string cbct_coronary_joint
 * @property array|string air_passage
 * @property array|string other
 * @property int create_time
 * @property array|string cbct_anterior_teeth
 * @property array|string cbct_under_teeth
 * @property array|string type
 * @property array|string abnormal_teeth
 */
class CaseHistoryImage extends Model
{
    protected $table = 'sl_case_history_images';
    public $timestamps = FALSE;

    public function CaseHistory ()
    {
        return $this->belongsTo('App\Model\CaseHistory','case_history_id');
    }
}
