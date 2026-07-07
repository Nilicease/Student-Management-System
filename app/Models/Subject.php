<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // Mass-assignable subject attributes
    protected $fillable = [
        'student_id',
        'teacher_id',
        'course_id',
        'code',
        'name',
        'units'
    ];

    // Subjects can be assigned to many students with pivot grades
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject')
            ->using(StudentSubject::class)
            ->withPivot('grade', 'remarks');
    }

    // Subject belongs to a teacher
    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
}
