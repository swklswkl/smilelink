<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'sl_program';
    public $timestamps = FALSE;

    public function Orthodontics ()
    {
        return $this->belongsTo('App\Model\Orthodontics','orthodontics_id');
    }
}
