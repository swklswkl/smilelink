<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|string service_id
 * @property array|string name
 * @property array|string sex
 * @property array|string birthday
 * @property array|string id_number
 * @property array|string mobilephone
 * @property array|string province
 * @property array|string city
 * @property CaseController|\Illuminate\Database\Eloquent\Model|mixed|null|string archives_number
 * @property int create_time
 * @property null|string last_ip
 */
class CaseHistory extends Model
{
    protected $table = 'sl_case_history';
    protected $primaryKey = 'id';
    protected $casts = ['complaint_options'=>'array'];
    public $timestamps = FALSE;

    /**
     * 关联医生表
     */
    public function Doctors ()
    {
        return $this->belongsTo('App\Model\Doctors','doctor_id');
    }

    /**
     * 关联病历图片表
     */
    public function CaseHistoryImages ()
    {
        return $this->hasOne('App\Model\CaseHistoryImage','case_history_id');
    }

    public function Orders ()
    {
        return $this->hasOne('App\Model\Orders','case_history_id');
    }
    /**
     * 关联X光分析表
     */
    public function Analysis ()
    {
        return $this->hasOne('App\Model\Analysis','case_history_id');
    }

    /**
     * 关联诊断设计表
     */
    public function DiagnosticDesign ()
    {
        return $this->hasOne('App\Model\DiagnosticDesign','case_history_id');
    }

    /**
     * 关联治疗过程表
     */
    public function TreatmentProcess ()
    {
        return $this->hasMany('App\Model\TreatmentProcess','case_history_id');
    }

    public function scopeStatus($query, $status)
    {
        if (!in_array($status, ['1', '2'])) {
            return $query;
        }
            return $query->where('status',  $status);
    }
    /**
     * 定义complaint_options字段
     */
//    public function setComplaintOptionsAttribute ($value)
//    {
//        $this->attributes['complaint_options'] = strtolower($value);
//    }
}
