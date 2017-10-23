<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'sl_doctors';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;

    /**
     * 关联订单表
     */
    public function Orders ()
    {
        return $this->hasMany('App\Model\Orders','doctor_id');
    }

    /**
     * 关联病历表
     */
    public function CaseHistory ()
    {
        return $this->hasMany('App\Model\CaseHistory','doctor_id');
    }
}
