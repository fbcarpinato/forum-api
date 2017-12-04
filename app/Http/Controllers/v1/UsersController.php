<?php

namespace Forum\Http\Controllers\v1;

use Forum\Http\Controllers\ApiController;
use Forum\Http\Resources\UserResource;
use Forum\Models\User;

/**
 * @resource Users
 * @package Forum\Http\Controllers\v1
 */
class UsersController extends ApiController
{
    /**
     * Fetch all the users.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::all();
        return $this->respondSuccess(UserResource::collection($users));
    }

    /**
     * Fetch a single user.
     *
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return $this->respondSuccess(new UserResource($user));
    }
}
