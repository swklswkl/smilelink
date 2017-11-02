<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CaseHistoryImage extends Model
{
    protected $table = 'sl_case_history_images';
    public $timestamps = FALSE;

    public function CaseHistory ()
    {
        return $this->belongsTo('App\Model\CaseHistory','case_history_id');
    }
}
