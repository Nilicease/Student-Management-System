<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard with summary statistics.
     */
    public function index()
    {
        $stats = [
            'students' => Student::count(),
            'teachers' => Teacher::count(),
            'users' => User::count(),
            'courses' => Course::count(),
            'subjects' => Subject::count(),
        ];

        $latestStudents = Student::latest()->take(5)->get();
        $latestTeachers = Teacher::latest()->take(5)->get();
        $recentActivity = [
            ['message' => 'New student record created', 'time' => 'Just now'],
            ['message' => 'Teacher assignment updated', 'time' => '10 mins ago'],
            ['message' => 'Course catalog refreshed', 'time' => '1 hour ago'],
        ];

        return view('admin.dashboard', compact('stats', 'latestStudents', 'latestTeachers', 'recentActivity'));
    }
}
