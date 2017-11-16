<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'sl_program';
//    protected $keyType = 'string';
//    protected $primaryKey = 'orthodontics_id';
    public $timestamps = FALSE;

    public function Orthodontics ()
    {
        return $this->belongsTo('App\Model\Orthodontics','orthodontics_id');
    }
}
