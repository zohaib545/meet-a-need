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
        if ($this->type == 'university') {
            return $this->hasOne('App\University');
        }

    }

    protected $fillable = ['place_id', 'name', 'description', 'type', 'address'];
}
