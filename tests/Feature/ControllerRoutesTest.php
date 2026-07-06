<?php

namespace Tests\Feature;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ControllerRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_index_page_loads_for_authenticated_user(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/students')
            ->assertOk();
    }

    public function test_student_create_show_and_edit_pages_load_for_authenticated_user(): void
    {
        $user = User::factory()->create();
        $student = Student::create([
            'user_id' => $user->id,
            'name' => 'Alice Example',
            'student_number' => 1001,
            'course' => 'Computer Science',
            'year_level' => 1,
        ]);

        $this->actingAs($user)
            ->get('/students/create')
            ->assertOk();

        $this->actingAs($user)
            ->get('/students/' . $student->id)
            ->assertOk();

        $this->actingAs($user)
            ->get('/students/' . $student->id . '/edit')
            ->assertOk();
    }

    public function test_teacher_index_page_loads_for_authenticated_user(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/teachers')
            ->assertOk();
    }

    public function test_teacher_create_show_and_edit_pages_load_for_authenticated_user(): void
    {
        $user = User::factory()->create();
        $teacher = Teacher::create([
            'user_id' => $user->id,
            'name' => 'Jane Teacher',
            'employee_number' => 2001,
            'department' => 'Science',
        ]);

        $this->actingAs($user)
            ->get('/teachers/create')
            ->assertOk();

        $this->actingAs($user)
            ->get('/teachers/' . $teacher->id)
            ->assertOk();

        $this->actingAs($user)
            ->get('/teachers/' . $teacher->id . '/edit')
            ->assertOk();
    }

    public function test_subject_index_page_loads_for_authenticated_user(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/subjects')
            ->assertOk();
    }

    public function test_subject_create_show_and_edit_pages_load_for_authenticated_user(): void
    {
        $user = User::factory()->create();
        $teacher = Teacher::create([
            'user_id' => $user->id,
            'name' => 'John Teacher',
            'employee_number' => 2002,
            'department' => 'Math',
        ]);
        $subject = Subject::create([
            'teacher_id' => $teacher->id,
            'name' => 'Algebra',
            'code' => 'ALG101',
            'units' => 3,
        ]);

        $this->actingAs($user)
            ->get('/subjects/create')
            ->assertOk();

        $this->actingAs($user)
            ->get('/subjects/' . $subject->id)
            ->assertOk();

        $this->actingAs($user)
            ->get('/subjects/' . $subject->id . '/edit')
            ->assertOk();
    }
}
