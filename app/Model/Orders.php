<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'sl_orders';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;

    public function Doctors ()
    {
        return $this->belongsTo('App\Model\Doctors','doctor_id');
    }

    public function Experts ()
    {
        return $this->belongsTo('App\Model\Experts','expert_id');
    }
}
