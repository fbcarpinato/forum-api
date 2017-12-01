<?php

namespace RESTfullServiceTest\Http\Controllers\v1;

use RESTfullServiceTest\Http\Controllers\Controller;
use RESTfullServiceTest\Http\Resources\PostsCollection;
use RESTfullServiceTest\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return new PostsCollection($posts);
    }
}
