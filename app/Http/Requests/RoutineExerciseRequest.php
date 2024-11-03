<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoutineExerciseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'repetitions' => 'required|integer|min:1',
            'sets' => 'required|integer|min:1',
            'routine_id' => 'required|exists:routines,id',
            'exercise_id' => 'required|exists:exercises,id',
            'day' => 'required|integer|between:1,7',
        ];
    }
}
