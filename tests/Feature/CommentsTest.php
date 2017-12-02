<?php

namespace Tests\Feature;

use RESTfullServiceTest\Models\Post;
use RESTfullServiceTest\Models\Comment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_client_can_fetch_comments_of_a_certain_post()
    {
        $post = factory(Post::class)->create();
        factory(Comment::class)->create(['post_id' => $post->id]);

        $result = $this->getJson("api/v1/posts/{$post->id}/comments")
            ->assertStatus(200);

        $this->assertCount(1, $result->json()['data']);
    }

    /** @test */
    public function a_client_can_fetch_a_single_comment_from_a_certain_post()
    {

    }

    /** @test */
    public function a_authenticated_user_can_create_comments()
    {

    }

    /** @test */
    public function a_non_authenticated_user_cannot_create_comments()
    {

    }

    /** @test */
    public function a_user_can_delete_its_own_comments()
    {

    }

    /** @test */
    public function a_user_cannot_delete_other_users_comments()
    {

    }

    /** @test */
    public function a_user_can_edit_its_own_comments()
    {

    }

    /** @test */
    public function a_user_cannot_edit_other_users_comments()
    {

    }
}
