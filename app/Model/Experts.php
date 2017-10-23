<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experts extends Model
{
    protected $table = 'sl_experts';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;

    /**
     * 关联订单表
     */
    public function Orders ()
    {
        return $this->hasMany('App\Model\Orders','expert_id');
    }
}
