<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Healthcare extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($healthcare) {
            $healthcare->facility_details()->delete();
        });
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function facility_details()
    {
        return $this->hasMany('App\HealthcareFacilityDetail');
    }

}
