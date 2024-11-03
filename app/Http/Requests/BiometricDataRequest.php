<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiometricDataRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'heart_frequency' => 'nullable|integer',
            'pressure' => 'nullable|integer',
            'calories' => 'nullable|integer',
            'sleep_quality' => 'nullable|numeric|between:0,999.99',
            'sleep_minutes' => 'nullable|integer',
            'steps' => 'nullable|integer',
        ];
    }
}
