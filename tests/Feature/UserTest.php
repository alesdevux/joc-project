<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_view_profile()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response->get(route('users.show', $user->id))
            ->assertStatus(200)
            ->assertSee($user->name);
    }
}
