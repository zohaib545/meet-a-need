<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use Sluggable;
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($location) {
            $location->detail()->delete();
        });
    }

    public function detail()
    {
        if ($this->type == null) {
            return $this->hasOne('App\University');
        }

        if ($this->type == 'university') {
            return $this->hasOne('App\University');
        } else if ($this->type == 'healthcare') {
            return $this->hasOne('App\Healthcare');
        } else if ($this->type == 'hotel') {
            return $this->hasOne('App\Hotel');
        } else if ($this->type == 'restaurant') {
            return $this->hasOne('App\Restaurant');
        }

    }

    public function images()
    {
        return $this->hasMany('App\LocationImage');
    }

    protected $fillable = ['place_id', 'name', 'description', 'type', 'address'];
}
