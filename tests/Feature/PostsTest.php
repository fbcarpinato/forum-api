<?php

namespace Tests\Feature;

use RESTfullServiceTest\Models\User;
use RESTfullServiceTest\Models\Post;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_client_should_be_able_to_fetch_all_posts()
    {
        factory(Post::class, 5)->create();

        $result = $this->getJson('api/v1/posts')->assertStatus(200);
        $this->assertCount(5,$result->json()['data']);
    }

    /** @test */
    public function a_client_should_be_able_to_fetch_a_single_post_via_slug()
    {

    }

    /** @test */
    public function a_authenticated_user_should_be_able_to_create_a_new_post()
    {

    }

    /** @test */
    public function a_non_authenticated_user_should_not_be_able_to_create_new_post()
    {

    }

    /** @test */
    public function a_authenticated_user_should_be_able_to_delete_a_post()
    {

    }

    /** @test */
    public function a_non_authenticated_user_should_not_be_able_to_delete_posts()
    {

    }

    /** @test */
    public function a_authenticated_user_should_be_able_to_delete_only_its_own_posts()
    {

    }

    /** @test */
    public function a_authenticated_user_should_be_able_to_edit_posts()
    {

    }

    /** @test */
    public function a_non_authenticated_user_should_not_be_able_to_edit_posts()
    {

    }

    /** @test */
    public function a_authenticated_user_should_be_able_to_edit_only_its_own_posts()
    {

    }
}
