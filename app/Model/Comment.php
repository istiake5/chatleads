<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    

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
