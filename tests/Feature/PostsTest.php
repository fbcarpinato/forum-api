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
    public function a_client_should_be_able_to_fetch_a_single_post_via_id()
    {
        $post = factory(Post::class)->create();

        $result = $this->getJson("api/v1/posts/{$post->id}")
            ->assertStatus(200);

        $this->assertEquals($result->json()['data'], [
            'id'    => $post->id,
            'title' => $post->title,
            'body'  => $post->body
        ]);
    }

    /** @test */
    public function a_authenticated_user_should_be_able_to_create_a_new_post()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        $this->postJson('api/v1/posts', [
            'title' => 'test_post_title',
            'body'  => 'test_post_body'
        ])->assertStatus(201);

        $this->assertDatabaseHas('posts', [
            'title' => 'test_post_title',
            'body'  => 'test_post_body'
        ]);
    }

    /** @test */
    public function a_non_authenticated_user_should_not_be_able_to_create_new_post()
    {
        $this->postJson('api/v1/posts', [
            'title' => 'test_post_title',
            'body'  => 'test_post_body'
        ])->assertStatus(401);
    }

    /** @test */
    public function a_post_cannot_be_created_without_a_title()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        $this->postJson('api/v1/posts', [
            'body'  => 'test_post_body'
        ])->assertStatus(422);
    }

    /** @test */
    public function a_post_cannot_be_created_without_a_body()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');

        $this->postJson('api/v1/posts', [
            'title'  => 'test_post_title'
        ])->assertStatus(422);
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
