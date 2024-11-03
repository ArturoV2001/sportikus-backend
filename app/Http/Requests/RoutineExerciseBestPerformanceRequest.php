<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoutineExerciseBestPerformanceRequest extends FormRequest
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
            'routine_exercise_id' => 'required|exists:routine_exercises,id',
            'weight' => 'required|numeric|between:0,999.99',
            'sets' => 'nullable|integer|min:1',
        ];
    }
}
