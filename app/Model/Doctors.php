<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'sl_doctors';
    protected $primaryKey = 'id';
    protected $hidden = ['password'];
    protected $fillable  = ['id','mobilephone','password','name','sex','email','birthday','province','city','town','address','work_unit','certificate','working_years','avatar','security_level','alipay','wechat_pay','amount','create_time','last_ip','status'];
    public $timestamps = FALSE;

    /**
     * 关联订单表
     */
    public function Orders ()
    {
        return $this->hasMany('App\Model\Orders','doctor_id');
    }

    /**
     * 关联病历表
     */
    public function CaseHistory ()
    {
        return $this->hasMany('App\Model\CaseHistory','doctor_id');
    }

    /**
     * 关联正畸病历表
     */
    public function Orthodontics ()
    {
        return $this->hasMany(Orthodontics::class,'doctor_id');
    }
}
