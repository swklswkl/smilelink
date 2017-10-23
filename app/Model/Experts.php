<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experts extends Model
{
    protected $table = 'experts';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;

    /**
     * 关联订单表
     */
    public function Orders ()
    {
        return $this->hasMany('App\Orders','expert_id');
    }
}
