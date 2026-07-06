<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show a table of all students
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    // Show the student creation form
    public function create()
    {
        return view('students.create');
    }

    // Validate input and save a new student record
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:100',
            'student_number' => 'required|integer|unique:students,student_number',
            'course' => 'required|string',
            'year_level' => 'required|integer',
            'teacher_ids' => 'nullable|array',
            'teacher_ids.*' => 'exists:teachers,id',
            'subject_ids' => 'nullable|array',
            'subject_ids.*' => 'exists:subjects,id',
        ]);

        $student = Student::create($validatedData);

        if ($request->has('teacher_ids')) {
            $student->teachers()->sync($request->input('teacher_ids', []));
        }

        if ($request->has('subject_ids')) {
            $student->subjects()->sync($request->input('subject_ids', []));
        }

        return redirect()->route('students.index')
            ->with('message', 'Created Successfully');
    }

    // Show details for a single student
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('students.show', compact('student'));
    }

    // Show the student edit form
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    // Validate and update an existing student record
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:100',
            'student_number' => 'required|integer|unique:students,student_number,' . $student->id,
            'course' => 'required|string',
            'year_level' => 'required|integer',
            'teacher_ids' => 'nullable|array',
            'teacher_ids.*' => 'exists:teachers,id',
            'subject_ids' => 'nullable|array',
            'subject_ids.*' => 'exists:subjects,id',
        ]);

        $student->update($validatedData);

        if ($request->has('teacher_ids')) {
            $student->teachers()->sync($request->input('teacher_ids', []));
        }

        if ($request->has('subject_ids')) {
            $student->subjects()->sync($request->input('subject_ids', []));
        }

        return redirect()->route('students.index')
            ->with('message', 'Updated Successfully');
    }

    // Soft-delete a student by marking it inactive
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->update(['is_active' => false]);

        return redirect()->route('students.index')
            ->with('message', 'Deleted Successfully');
    }
}
