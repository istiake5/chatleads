<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comment;
use App\Model\Movie;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'movies_id' => function () {
            return Movie::all()->random();
        },
        'user_id' => function () {
            return User::all()->random();
        }
    ];
});
