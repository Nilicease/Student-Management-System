<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // Mass-assignable teacher attributes
    protected $fillable = [
        'user_id',
        'name',
        'employee_number',
        'department',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Link teacher to a user account
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A teacher may be linked to many students
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // A teacher may teach many subjects
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
