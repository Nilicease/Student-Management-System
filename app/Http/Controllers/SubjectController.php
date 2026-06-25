<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'teacher_id.*' => 'exists:teachers,id',
            'student_id' => 'required|exists:students,id',
            'student_id.*' => 'exists:students,id',
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:10',
            'units' => 'required|integer'
        ]);

        Subject::create($validatedData);

        return redirect()->route('subjects.index')
            ->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject = Subject::findOrFail($id);

        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'code' => 'required|string|max:10',
            'units' => 'required|integer'
        ]);

        $subject->update($validatedData);

        return redirect()->route('subjects.index')
            ->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
