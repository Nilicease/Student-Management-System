<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    // Show a list of all subjects
    public function index()
    {
        $subjects = Subject::all();

        return view('subjects.index', compact('subjects'));
    }

    // Show the subject creation form
    public function create()
    {
        return view('subjects.create');
    }

    // Validate input and save a new subject record
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:10',
            'units' => 'required|integer'
        ]);

        Subject::create($validatedData);

        return redirect()->route('subjects.index')
            ->with('message', 'Created Successfully');
    }

    // Show details for a single subject
    public function show(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.show', compact('subject'));
    }

    // Show the subject edit form
    public function edit(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.edit', compact('subject'));
    }

    // Validate and update an existing subject record
    public function update(Request $request, string $id)
    {
        $subject = Subject::findOrFail($id);

        $validatedData = $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:10',
            'units' => 'required|integer'
        ]);

        $subject->update($validatedData);

        return redirect()->route('subjects.index')
            ->with('message', 'Updated Successfully');
    }

    // Delete a subject record
    public function destroy(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')
            ->with('message', 'Deleted Successfully');
    }
}
