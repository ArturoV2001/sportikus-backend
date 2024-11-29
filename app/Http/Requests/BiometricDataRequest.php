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
            'user_id' => 'nullable|numeric|exists:users,id',
            'heart_frequency' => 'nullable|numeric|min:0',
            'steps' => 'nullable|numeric|min:0',
            'distance' => 'nullable|numeric|min:0|max:99999.99',
            'oxygenation' => 'nullable|numeric|between:0,100',
            'sleep_quantity' => 'nullable|numeric|min:0',
            'sleep_quality_awake' => 'nullable|numeric|min:0',
            'sleep_quality_rem' => 'nullable|numeric|min:0',
            'sleep_quality_core' => 'nullable|numeric|min:0',
            'sleep_quality_deep' => 'nullable|numeric|min:0',
        ];
    }
}
