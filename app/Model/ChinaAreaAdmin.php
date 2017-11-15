<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ChinaAreaAdmin extends Model
{
    protected $table = 'china_area';
    public $timestamps = FALSE;
    public function scopeProvince()
    {
        return $this->where('type', 1);
    }

    public function scopeCity()
    {
        return $this->where('type', 2);
    }

    public function scopeDistrict()
    {
        return $this->where('type', 3);
    }

    public function parent()
    {
        return $this->belongsTo(ChinaArea::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ChinaArea::class, 'parent_id');
    }

    public function brothers()
    {
        return $this->parent->children();
    }

    public static function options($id)
    {

        if (! $self = static::find($id)) {
            return [];
        }
        return $self->brothers();
    }

    public static function cxsf ($id)
    {
        $data = static::find($id);
        $data = $data->attributes['name'];
        return $data;
    }

    public static function Prp()
    {
        return static::select('name')->where('type', 1);
    }
}
