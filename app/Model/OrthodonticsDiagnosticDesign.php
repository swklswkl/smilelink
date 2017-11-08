<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrthodonticsDiagnosticDesign extends Model
{
    protected $table = 'sl_orthodontics_diagnostic_design';
    protected $primaryKey = 'orthodontics_id';
    protected $keyType = 'string';
    public $timestamps = FALSE;

    public function Orthodontics ()
    {
        return $this->belongsTo(Orthodontics::class,'orthodontics_id');
    }
}
