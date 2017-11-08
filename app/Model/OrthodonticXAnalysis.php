<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrthodonticXAnalysis extends Model
{
    protected $table = 'sl_orthodontic_x_analysis';
    protected $primaryKey = 'orthodontics_id';
    protected $keyType = 'string';
    public $timestamps = FALSE;

    public function Orthodontics ()
    {
        return $this->belongsTo(Orthodontics::class,'orthodontics_id');
    }
}
