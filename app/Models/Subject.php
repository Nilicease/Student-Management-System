<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'student_id',
        'teacher_id',
        'code',
        'name',
        'units'
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject')
            ->using(StudentSubject::class)
            ->withPivot('grade', 'remarks');
    }

    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }
}
