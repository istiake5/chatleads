<?php

namespace App\Model;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($movie) {
            $movie->slug = Str::slug($movie->name);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $dates = [
        'release',
        'date',
    ];
    protected $fillable = ['name', 'slug', 'description', 'user_id'];
    //protected $guarded = [];
    protected $with = ['comments'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->hasMany('App\Model\Comment','movies_id','id')->latest();
    }

    // public function comments(){
    //     return $this->hasMany(Comment::class)->latest();
    // }

    public function getPathAttribute()
    {
        return "/movie/$this->slug";

    }
}
