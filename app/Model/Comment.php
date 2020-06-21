<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            $comment->user_id = auth()->id();
        });
    }

    protected $guarded = [];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
