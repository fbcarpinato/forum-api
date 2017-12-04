<?php

namespace Tests\Feature;

use Forum\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_client_should_be_able_to_fetch_all_users()
    {
        factory(User::class)->create();
        factory(User::class)->create();

        $result = $this->getJson('api/v1/users')
            ->assertStatus(200);

        $this->assertCount(2, $result->json()['data']);
    }

    /** @test */
    public function a_client_should_be_able_to_fetch_a_single_user()
    {
        $user = factory(User::class)->create();

        $result = $this->getJson("api/v1/users/{$user->id}")
            ->assertStatus(200);

        $this->assertEquals([
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email
        ], $result->json()['data']);
    }
}
