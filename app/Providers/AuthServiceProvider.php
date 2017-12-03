<?php

namespace RESTfullServiceTest\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use RESTfullServiceTest\Models\Comment;
use RESTfullServiceTest\Models\Post;
use RESTfullServiceTest\Policies\CommentsPolicy;
use RESTfullServiceTest\Policies\PostsPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Post::class     => PostsPolicy::class,
        Comment::class  => CommentsPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
