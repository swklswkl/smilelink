<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrthodonticsTreatmentProcess extends Model
{
    protected $table = 'sl_orthodontics_treatment_process';
    public $timestamps = FALSE;

    public function Orthodontics ()
    {
        return $this->belongsTo(Orthodontics::class,'orthodontics_id');
    }
}
