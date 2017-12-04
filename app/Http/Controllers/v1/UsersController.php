<?php

namespace Forum\Http\Controllers\v1;

use Forum\Http\Controllers\ApiController;
use Forum\Http\Resources\UserResource;
use Forum\Models\User;

class UsersController extends ApiController
{
    public function index()
    {
        $users = User::all();
        return $this->respondSuccess(UserResource::collection($users));
    }

    public function show(User $user)
    {
        return $this->respondSuccess(new UserResource($user));
    }
}
