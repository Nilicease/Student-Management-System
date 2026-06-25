<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id',
        'teacher_id',
        'subject_id',
        'name',
        'student_number',
        'course',
        'year_level',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'student_teacher');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject')
            ->using(StudentSubject::class)
            ->withPivot('grade', 'remarks');
    }
}
