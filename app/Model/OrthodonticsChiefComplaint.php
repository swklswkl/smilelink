<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrthodonticsChiefComplaint extends Model
{
    protected $table = 'sl_orthodontics_chief_complaint';
    protected $primaryKey = 'orthodontics_id';
    protected $keyType = 'string';
    public function Orthodontics ()
    {
        return $this->belongsTo(Orthodontics::class,'orthodontics_id');
    }
}
