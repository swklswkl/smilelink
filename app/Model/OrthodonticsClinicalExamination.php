<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrthodonticsClinicalExamination extends Model
{
    protected $table = 'sl_orthodontics_clinical_examination';
    protected $primaryKey = 'orthodontics_id';
    protected $keyType = 'string';
    public $timestamps = FALSE;
    public function Orthodontics ()
    {
        return $this->belongsTo(Orthodontics::class,'orthodontics_id');
    }
}
