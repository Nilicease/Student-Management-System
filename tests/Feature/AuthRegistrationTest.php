<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_route_accepts_valid_payload(): void
    {
        $response = $this->post('/register', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $response->assertRedirect(route('user.pending'));

        $this->assertDatabaseHas('users', [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ]);
    }

    public function test_guest_is_redirected_from_students_index(): void
    {
        $response = $this->get('/students');

        $response->assertRedirect(route('login'));
    }

    public function test_login_redirects_pending_user(): void
    {
        User::factory()->create([
            'name' => 'Pending User',
            'email' => 'pending@example.com',
            'password' => bcrypt('password123'),
            'email_verified_at' => null,
            'role' => 'student',
        ]);

        $response = $this->post('/login', [
            'email' => 'pending@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect(route('user.pending'));
    }
}
