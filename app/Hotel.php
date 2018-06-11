<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($hotel) {
            $hotel->hotel_details()->delete();
        });
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function hotel_details()
    {
        return $this->hasMany('App\HotelDetail');
    }
}
