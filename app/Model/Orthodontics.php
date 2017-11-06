<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orthodontics extends Model
{
    protected $table = 'sl_orthodontics_case_history';
    protected $keyType = 'string';
    public $timestamps = FALSE;

    public function Doctor ()
    {
        return $this->belongsTo(Doctors::class,'doctor_id');
    }

    public function OrthodonticsChiefComplaint ()
    {
        return $this->hasOne(OrthodonticsChiefComplaint::class,'orthodontics_id');
    }

}
