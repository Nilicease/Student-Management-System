<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminCourseTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_access_dashboard(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin)
            ->get('/admin/dashboard')
            ->assertOk();
    }

    public function test_non_admin_cannot_access_admin_dashboard(): void
    {
        $user = User::factory()->create(['role' => 'student']);

        $this->actingAs($user)
            ->get('/admin/dashboard')
            ->assertForbidden();
    }

    public function test_admin_can_create_a_course(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $response = $this->actingAs($admin)->post('/admin/courses', [
            'code' => 'CS101',
            'name' => 'Computer Science',
            'department' => 'Technology',
        ]);

        $response->assertRedirect(route('admin.courses.index'));
        $this->assertDatabaseHas('courses', [
            'code' => 'CS101',
            'name' => 'Computer Science',
        ]);
    }

    public function test_admin_can_update_and_delete_a_course(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $course = Course::create([
            'code' => 'MTH101',
            'name' => 'Mathematics',
            'department' => 'Science',
        ]);

        $this->actingAs($admin)
            ->put('/admin/courses/' . $course->id, [
                'code' => 'MTH102',
                'name' => 'Advanced Mathematics',
                'department' => 'Science',
            ])
            ->assertRedirect(route('admin.courses.index'));

        $this->assertDatabaseHas('courses', [
            'id' => $course->id,
            'code' => 'MTH102',
            'name' => 'Advanced Mathematics',
        ]);

        $this->actingAs($admin)
            ->delete('/admin/courses/' . $course->id)
            ->assertRedirect(route('admin.courses.index'));

        $this->assertDatabaseMissing('courses', ['id' => $course->id]);
    }
}
