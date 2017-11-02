<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property array|string service_id
 * @property array|string name
 * @property array|string sex
 * @property array|string birthday
 * @property array|string id_number
 * @property array|string mobilephone
 * @property array|string province
 * @property array|string city
 * @property CaseController|\Illuminate\Database\Eloquent\Model|mixed|null|string archives_number
 * @property int create_time
 * @property null|string last_ip
 */
class CaseHistory extends Model
{
    protected $table = 'sl_case_history';
    protected $primaryKey = 'id';
    public $timestamps = FALSE;

    public function Doctors ()
    {
        return $this->belongsTo('App\Model\Doctors','doctor_id');
    }
}
