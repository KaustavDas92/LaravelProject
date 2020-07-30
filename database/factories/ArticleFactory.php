<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        'Title'=>$faker->sentence(6),
        'excerpt'=>$faker->sentence,
        'body'=>$faker->paragraph(2)
    ];
});
