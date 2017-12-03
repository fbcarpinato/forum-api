<?php

namespace Tests\Feature;

use RESTfullServiceTest\Models\Post;
use RESTfullServiceTest\Models\Comment;
use RESTfullServiceTest\Models\User;
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
        factory(Comment::class)->create(['post_id' => $post->id]);
        factory(Comment::class)->create(['post_id' => $post->id]);

        $result = $this->getJson("api/v1/posts/{$post->id}/comments")
            ->assertStatus(200);

        $this->assertCount(3, $result->json()['data']);
    }

    /** @test */
    public function a_client_can_fetch_a_single_comment_from_a_certain_post()
    {
        $post = factory(Post::class)->create();
        $comment = factory(Comment::class)->create(['post_id' => $post->id]);

        $result = $this->getJson("api/v1/posts/{$post->id}/comments/{$comment->id}")
            ->assertStatus(200);

        $this->assertEquals([
            'id'        => $comment->id,
            'post_id'   => $comment->post_id,
            'user_id'   => $comment->user_id,
            'body'      => $comment->body
        ], $result->json()['data']);
    }

    /** @test */
    public function a_authenticated_user_can_create_comments()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user, 'api');

        $this->postJson("api/v1/posts/{$post->id}/comments",[
            'body'  => 'test_comment_body'
        ])->assertStatus(201);

        $this->assertDatabaseHas('comments', [
            'body'  => 'test_comment_body'
        ]);
    }

    /** @test */
    public function a_body_field_is_required_when_creating_a_post()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $this->actingAs($user, 'api');

        $this->postJson("api/v1/posts/{$post->id}/comments",[])
            ->assertStatus(422);
    }

    /** @test */
    public function a_non_authenticated_user_cannot_create_comments()
    {
        $post = factory(Post::class)->create();

        $this->postJson("api/v1/posts/{$post->id}/comments",[
            'body'  => 'test_comment_body'
        ])->assertStatus(401);
    }

    /** @test */
    public function a_user_can_delete_its_own_comments()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $comment = factory(Comment::class)->create(['post_id' => $post->id, 'user_id' => $user->id]);
        $this->actingAs($user, 'api');

        $this->deleteJson("api/v1/posts/{$post->id}/comments/{$comment->id}")
            ->assertStatus(200);

        $this->assertDatabaseMissing('comments', [
            'id'    =>  $comment->id
        ]);
    }

    /** @test */
    public function a_user_cannot_delete_other_users_comments()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();
        $comment = factory(Comment::class)->create(['post_id' => $post->id]);
        $this->actingAs($user, 'api');

        $this->deleteJson("api/v1/posts/{$post->id}/comments/{$comment->id}")
            ->assertStatus(403);
    }

    /** @test */
    public function a_non_authenticated_user_cannot_delete_comments()
    {
        $post = factory(Post::class)->create();
        $comment = factory(Comment::class)->create(['post_id' => $post->id]);
        $this->deleteJson("api/v1/posts/{$post->id}/comments/{$comment->id}")
            ->assertStatus(401);
    }

    /** @test */
    public function a_user_can_edit_its_own_comments()
    {
        $post = factory(Post::class)->create();
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');
        $comment = factory(Comment::class)->create(['post_id' => $post->id, 'user_id' => $user->id]);

        $this->putJson("api/v1/posts/{$post->id}/comments/{$comment->id}", [
            'body'  => 'new_comment_test_body'
        ])->assertStatus(200);

        $this->assertDatabaseHas('comments', [
            'body'  => 'new_comment_test_body'
        ]);
    }

    /** @test */
    public function a_body_field_is_required_to_update_a_comment()
    {
        $post = factory(Post::class)->create();
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');
        $comment = factory(Comment::class)->create(['post_id' => $post->id, 'user_id' => $user->id]);

        $this->putJson("api/v1/posts/{$post->id}/comments/{$comment->id}", [])->assertStatus(422);
    }

    /** @test */
    public function a_user_cannot_edit_other_users_comments()
    {
        $post = factory(Post::class)->create();
        $user = factory(User::class)->create();
        $this->actingAs($user, 'api');
        $comment = factory(Comment::class)->create(['post_id' => $post->id]);

        $this->putJson("api/v1/posts/{$post->id}/comments/{$comment->id}", [
            'body'  => 'new_comment_test_body'
        ])->assertStatus(403);
    }

    /** @test */
    public function a_non_authenticated_user_cannot_edit_comments()
    {
        $post = factory(Post::class)->create();
        $comment = factory(Comment::class)->create(['post_id' => $post->id]);

        $this->putJson("api/v1/posts/{$post->id}/comments/{$comment->id}", [
            'body'  => 'new_comment_test_body'
        ])->assertStatus(401);
    }
}
