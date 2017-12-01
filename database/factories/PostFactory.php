<?php

use Faker\Generator as Faker;
use RESTfullServiceTest\Models\Post;
use RESTfullServiceTest\Models\User;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body'  => $faker->text,
        'user_id'   => factory(User::class)->create()->id
    ];
});
