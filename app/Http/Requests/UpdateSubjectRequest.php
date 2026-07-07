<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $subjectId = $this->route('subject')?->id ?? $this->route('subject');

        return [
            'teacher_id' => ['nullable', 'exists:teachers,id'],
            'course_id' => ['nullable', 'exists:courses,id'],
            'code' => ['nullable', 'string', 'max:50', 'unique:subjects,code,' . $subjectId],
            'name' => ['nullable', 'string', 'max:255'],
            'units' => ['nullable', 'integer', 'min:1', 'max:12'],
        ];
    }
}
