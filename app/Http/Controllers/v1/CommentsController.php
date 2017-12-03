<?php

namespace RESTfullServiceTest\Http\Controllers\v1;

use RESTfullServiceTest\Http\Controllers\ApiController;
use RESTfullServiceTest\Http\Resources\CommentResource;
use RESTfullServiceTest\Models\Comment;
use RESTfullServiceTest\Models\Post;

/**
 * @resource Comments
 * @package RESTfullServiceTest\Http\Controllers\v1
 */
class CommentsController extends ApiController
{
    /**
     * Fetch all the comments.
     *
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Post $post)
    {
        $comments = $post->comments;
        return $this->respondSuccess(CommentResource::collection($comments));
    }

    /**
     * Fetch a single comment.
     *
     * @param Post $post
     * @param Comment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Post $post, Comment $comment)
    {
        return $this->respondSuccess(new CommentResource($comment));
    }

    /**
     * Create a new comment.
     *
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
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

    /**
     * Update a comment.
     *
     * @param Post $post
     * @param Comment $comment
     */
    public function update(Post $post, Comment $comment)
    {
        $this->authorize('update', $comment);

        $request = request()->validate([
            'body'  => 'required'
        ]);

        $comment->update([
            'body'  => $request['body']
        ]);
    }

    /**
     * Delete a comment.
     *
     * @param Post $post
     * @param Comment $comment
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Post $post, Comment $comment)
    {
        $this->authorize('delete', $comment);
        $comment->delete();
        return $this->respondDeleted();
    }
}
