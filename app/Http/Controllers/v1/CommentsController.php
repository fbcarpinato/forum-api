<?php

namespace RESTfullServiceTest\Http\Controllers\v1;

use RESTfullServiceTest\Http\Controllers\ApiController;
use RESTfullServiceTest\Http\Resources\CommentResource;
use RESTfullServiceTest\Models\Comment;
use RESTfullServiceTest\Models\Post;

class CommentsController extends ApiController
{
    public function index(Post $post)
    {
        $comments = $post->comments;
        return $this->respondSuccess(CommentResource::collection($comments));
    }

    public function show(Post $post, Comment $comment)
    {
        return $this->respondSuccess(new CommentResource($comment));
    }

    public function store(Post $post)
    {
        $request = request()->validate([
            'body'  => 'required'
        ]);

        $comment = Comment::create([
            'user_id'    => auth()->user()->id,
            'post_id'    =>  $post->id,
            'body'       => $request['body']
        ]);

        return $this->respondCreated(new CommentResource($comment));
    }
}
