<?php

use Faker\Generator as Faker;
use Forum\Models\Post;
use Forum\Models\User;
use Forum\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'      => $faker->sentence,
        'user_id'   => factory(User::class)->create()->id,
        'post_id'   => factory(Post::class)->create()->id
    ];
});
