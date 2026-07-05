<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentTeacher extends Model
{
    // Pivot record for student-teacher assignments
    protected $fillable = [
        'student_id',
        'teacher_id'
    ];
}
