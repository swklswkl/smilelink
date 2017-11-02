<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TreatmentProcess extends Model
{
    protected $table = 'sl_treatment_process';
    public $timestamps = FALSE;
    protected $fillable = ['id','case_history_id','name','content','frequency','middle_bite_photo','right_bite_photo','left_bite_photo','upper_dental_arch_photo','under_dental_arch_photo','front_opening_photo','front_closed_photo','panoramic_photo','side_cranium_photo','front_cranium_photo','denticle_photo'];
    public function CaseHistory ()
    {
        return $this->belongsTo('App\Model\CaseHistory','case_history_id');
    }
}
