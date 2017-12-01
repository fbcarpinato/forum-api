<?php

use Faker\Generator as Faker;
use RESTfullServiceTest\Models\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body'  => $faker->text
    ];
});
