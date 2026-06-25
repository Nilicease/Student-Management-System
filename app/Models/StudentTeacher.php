<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentTeacher extends Model
{
    protected $fillable = [
        'student_id',
        'teacher_id'
    ];
}
