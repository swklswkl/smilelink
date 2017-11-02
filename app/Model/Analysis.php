<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    protected $table = 'sl_x_analysis';
    public $timestamps = FALSE;

    public function CaseHistory ()
    {
        return $this->belongsTo('App\Model\CaseHistory','case_history_id');
    }
}
