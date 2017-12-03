<?php

namespace RESTfullServiceTest\Policies;

use RESTfullServiceTest\Models\Comment;
use RESTfullServiceTest\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentsPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, Comment $comment)
    {
        return $user->id == $comment->user_id;
    }

    public function update(User $user, Comment $comment)
    {
        return $user->id == $comment->user_id;
    }
}
