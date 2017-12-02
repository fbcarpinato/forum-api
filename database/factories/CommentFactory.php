<?php

use Faker\Generator as Faker;
use RESTfullServiceTest\Models\Post;
use RESTfullServiceTest\Models\User;
use RESTfullServiceTest\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'      => $faker->sentence,
        'user_id'   => factory(User::class)->create()->id,
        'post_id'   => factory(Post::class)->create()->id
    ];
});
