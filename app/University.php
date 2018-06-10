<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($university) {
            $university->admission_details()->delete();
        });
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function admission_details()
    {
        return $this->hasMany('App\UniversityAdmissionDetail');
    }
}
