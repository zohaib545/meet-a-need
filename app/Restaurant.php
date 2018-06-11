<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($restaurant) {
            $restaurant->restaurant_details()->delete();
        });
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function restaurant_details()
    {
        return $this->hasMany('App\RestaurantDetail');
    }
}
