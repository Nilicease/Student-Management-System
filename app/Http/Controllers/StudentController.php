<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::query()
            ->when(request('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('course', 'like', "%{$search}%")
                    ->orWhere('student_number', 'like', "%{$search}%");
            })
            ->when(request('course'), function ($query, $course) {
                $query->where('course', 'like', "%{$course}%");
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        return view('admin.students', compact('students'));
    }

    public function create(): View
    {
        return view('admin.students');
    }

    public function store(StoreStudentRequest $request): RedirectResponse
    {
        Student::create($request->validated());

        return redirect()->route('admin.students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student): View
    {
        return view('admin.students', compact('student'));
    }

    public function edit(Student $student): View
    {
        return view('admin.students', compact('student'));
    }

    public function update(UpdateStudentRequest $request, Student $student): RedirectResponse
    {
        $student->update($request->validated());

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->update(['is_active' => false]);

        return redirect()->route('admin.students.index')->with('success', 'Student disabled successfully.');
    }
}
