<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Movie;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    $name = $faker->sentence;
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->text,
        'price' => $faker->randomNumber($nbDigits = 3, $strict = true),
        'rating'   => mt_rand(1, 5),
        'ticket' => $faker->word,
        'genre' => $faker->word,
        'country' => $faker->country,
        'date' => $faker->dateTime,
        'release' => $faker->dateTime,
        'photo' => $faker->image('public/images/movies', 640, 420, null, false),

        'user_id' => function(){
            return User::all()->random();
        }
    ];
});

