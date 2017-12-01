<?php

namespace RESTfullServiceTest\Http\Controllers\v1;

use Illuminate\Http\Request;
use RESTfullServiceTest\Http\Controllers\Controller;
use RESTfullServiceTest\Http\Resources\PostResource;
use RESTfullServiceTest\Http\Resources\PostsCollection;
use RESTfullServiceTest\Models\Post;

class PostsController extends Controller
{
    /**
     * @return PostsCollection
     */
    public function index() {
        $posts = Post::all();
        return new PostsCollection($posts);
    }

    /**
     * @param Post $post
     * @return PostResource
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * @param Request $request
     * @return PostResource
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body'  => 'required'
        ]);

        $post = Post::create([
           'title'  => $request->get('title'),
            'body'  => $request->get('body')
        ]);
        return new PostResource($post);
    }
}
