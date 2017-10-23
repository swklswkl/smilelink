<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Case_History extends Model
{
    protected $table = 'case_history';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;
}
