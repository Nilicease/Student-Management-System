<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    // Show a list of all teachers
    public function index()
    {
        $teachers = Teacher::all();

        return view('teachers.index', compact('teachers'));
    }

    // Show the teacher creation form
    public function create()
    {
        return view('teachers.create');
    }

    // Validate input and save a new teacher record
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:100',
            'employee_number' => 'required|integer',
            'department' => 'required|string'
        ]);

        $teacher = Teacher::create($validated);

        return redirect()->route('teachers.index')->with('message', 'Created Successfully');
    }

    // Show details for a single teacher
    public function show(string $id)
    {
        $teacher = Teacher::findOrfail($id);

        return view('teachers.show', compact('teacher'));
    }

    // Show the teacher edit form
    public function edit(string $id)
    {
        $teacher = Teacher::findOrfail($id);

        return view('teachers.edit', compact('teacher'));
    }

    // Validate and update an existing teacher record
    public function update(Request $request, string $id)
    {
        $teacherID = Teacher::findOrfail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'employee_number' => 'sometimes|required|integer',
            'department' => 'sometimes|required|string',
            'is_active' => 'sometimes|required|boolean'
        ]);

        $teacherID->update($validated);

        return redirect()->route('teachers.index')->with('message', 'Update Successfully');
    }

    // Soft-delete a teacher by marking them inactive
    public function destroy(string $id)
    {
        $teacher = Teacher::findOrfail($id);

        $teacher->update([
            'is_active' => false
        ]);

        return redirect()->route('teachers.index')->with('message', 'Deactivated Successfully');
    }
}
