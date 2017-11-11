<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orthodontics extends Model
{
    protected $table = 'sl_orthodontics_case_history';
    protected $keyType = 'string';
    public $timestamps = FALSE;

    public function Doctor ()
    {
        return $this->belongsTo(Doctors::class,'doctor_id');
    }

    public function OrthodonticsChiefComplaint ()
    {
        return $this->hasOne(OrthodonticsChiefComplaint::class,'orthodontics_id');
    }

    public function CaseHistoryImages ()
    {
        return $this->hasOne('App\Model\CaseHistoryImage','orthodontics_id');
    }

    public function OrthodonticsClinicalExamination ()
    {
        return $this->hasOne(OrthodonticsClinicalExamination::class,'orthodontics_id');
    }

    public function OrthodonticXAnalysis ()
    {
        return $this->hasOne(OrthodonticXAnalysis::class,'orthodontics_id');
    }

    public function OrthodonticsDiagnosticDesign ()
    {
        return $this->hasOne(OrthodonticsDiagnosticDesign::class,'orthodontics_id');
    }

    public function OrthodonticsTreatmentProcess ()
    {
        return $this->hasMany(OrthodonticsTreatmentProcess::class,'orthodontics_id');
    }

    public function scopeStatus($query, $status)
    {
        if (!in_array($status, ['1', '2','3'])) {
            return $query;
        }
        return $query->where('status',  $status);
    }

    public function Program ()
    {
        return $this->hasMany('App\Model\Program','orthodontics_id');
    }
}
