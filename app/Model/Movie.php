<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $dates = [
        'release',
        'date',
    ];
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany('App\Model\Comment','movies_id','id')->latest();
    }

    public function getPathAttribute()
    {
        return "/movie/$this->slug";

    }
}
