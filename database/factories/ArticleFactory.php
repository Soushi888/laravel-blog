<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        "user_id" => factory(App\User::class),
        "title" => $faker->sentence(),
        "slug" => $faker->slug(),
        "excerpt" => $faker->paragraph(),
        "body" => $faker->paragraph()
    ];
});
