<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orthodontics extends Model
{
    protected $table = 'sl_orthodontics_case_history';
    public $timestamps = FALSE;

    public function Doctor ()
    {
        return $this->belongsTo(Doctors::class,'doctor_id');
    }
}
