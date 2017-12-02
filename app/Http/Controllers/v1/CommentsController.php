<?php

namespace RESTfullServiceTest\Http\Controllers\v1;

use RESTfullServiceTest\Http\Controllers\ApiController;
use RESTfullServiceTest\Http\Resources\CommentResource;
use RESTfullServiceTest\Models\Post;

class CommentsController extends ApiController
{
    public function index(Post $post)
    {
        $comments = $post->comments;
        return $this->respondSuccess(CommentResource::collection($comments));
    }
}
