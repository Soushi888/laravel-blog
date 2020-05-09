<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\ArticleTag;
use App\Model;
use Faker\Generator as Faker;

$factory->define(ArticleTag::class, function (Faker $faker) {
    return [
        "article_id" => factory(App\Article::class),
        "tag_id" => factory(App\Tag::class)
    ];
});
