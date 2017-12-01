<?php

namespace RESTfullServiceTest\Http\Controllers\v1;

use Illuminate\Http\Request;
use RESTfullServiceTest\Http\Controllers\ApiController;
use RESTfullServiceTest\Http\Requests\CreatePostRequest;
use RESTfullServiceTest\Http\Resources\PostResource;
use RESTfullServiceTest\Models\Post;

/**
 * @resource Posts
 *
 * Class PostsController
 * @package RESTfullServiceTest\Http\Controllers\v1
 */
class PostsController extends ApiController
{
    /**
     * Retrieve all the posts present in the database.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        $posts = Post::all();
        return $this->respondSuccess(PostResource::collection($posts));
    }

    /**
     * Finds a single post.
     *
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Post $post)
    {
        return $this->respondSuccess(new PostResource($post));
    }

    /**
     * Creates a new post.
     *
     * @param Request|CreatePostRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreatePostRequest $request)
    {
        $post = Post::create([
           'title'      => $request['title'],
            'body'      => $request['body'],
            'user_id'   => auth()->user()->id
        ]);
        return $this->respondCreated(new PostResource($post));
    }

    /**
     * Updates a certain post.
     *
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Post $post)
    {
        $this->authorize('update', $post);

        $request = \request()->validate([
            'title' => 'required_without:body',
            'body'  => 'required_without:title'
        ]);

        $post->update($request);
        return $this->respondUpdated();
    }

    /**
     * Deletes a certain post.
     *
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return $this->respondDeleted();
    }
}
