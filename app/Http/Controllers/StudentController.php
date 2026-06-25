<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'teacher_id' => 'required|array',
            'teacher_id.*' => 'exists:teachers,id',
            'subject_id' => 'required|array',
            'subject_id.*' => 'exists:subjects,id',
            'name' => 'required|string|max:100',
            'student' => 'required|integer',
            'course' => 'required|string',
            'year_level' => 'required|integer'
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')
            ->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'teacher_id' => 'required|array',
            'teacher_id.*' => 'exists:teachers,id',
            'subject_id' => 'required|array',
            'subject_id.*' => 'exists:subjects,id',
            'name' => 'required|string|max:100',
            'student' => 'required|integer',
            'course' => 'required|string',
            'year_level' => 'required|integer'
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index')
            ->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->update(['is_active' => false]);

        return redirect()->route('students.index')
            ->with('message', 'Deleted Successfully');
    }
}
