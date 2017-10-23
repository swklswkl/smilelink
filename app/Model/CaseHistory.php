<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CaseHistory extends Model
{
    protected $table = 'sl_case_history';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;

    public function Doctors ()
    {
        return $this->belongsTo('App\Model\Doctors','doctor_id');
    }
}
