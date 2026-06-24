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
        return $this->belongsToMany(Student::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
