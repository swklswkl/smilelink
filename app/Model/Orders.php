<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'sl_orders';
//    protected $primaryKey = 'number';
    public $timestamps = FALSE;

    public function Doctors ()
    {
        return $this->belongsTo('App\Model\Doctors','doctor_id');
    }

    public function Experts ()
    {
        return $this->belongsTo('App\Model\Experts','expert_id');
    }

    public function CaseHistory ()
    {
        return $this->belongsTo(CaseHistory::class,'case_history_id');
    }

    public function Orthodontics ()
    {
        return $this->belongsTo(Orthodontics::class,'orthodontics_id');
    }

    public function scopeStatus($query, $status)
    {
        if (!in_array($status, ['0','1', '2', '3','4'])) {
            return $query;
        }
        return $query->where('status', $status);
    }
}
