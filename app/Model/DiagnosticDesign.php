<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DiagnosticDesign extends Model
{
    protected $table = 'sl_diagnostic_design';
    public $timestamps = FALSE;

    public function CaseHistory ()
    {
        return $this->belongsTo('App\Model\CaseHistory','case_history_id');
    }
}
