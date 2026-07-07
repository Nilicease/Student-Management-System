<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Mass-assignable student attributes
    protected $fillable = [
        'user_id',
        'teacher_id',
        'subject_id',
        'course_id',
        'name',
        'student_number',
        'course',
        'year_level',
        'is_active'
    ];

    // Link student to a user account
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Link student to many teachers through pivot
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'student_teacher');
    }

    // Link student to many subjects and store grade data on pivot
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject')
            ->using(StudentSubject::class)
            ->withPivot('grade', 'remarks');
    }
}
