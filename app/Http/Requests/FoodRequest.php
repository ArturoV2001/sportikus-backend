<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'name' => 'required|string|max:80',
            'image' => 'nullable|string',
            'calories_per_unit' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'quality' => 'required|boolean',
            'protein' => 'nullable|integer',
            'fat' => 'nullable|integer',
            'carbohidrate' => 'nullable|integer',
            'step' => 'required|numeric|between:0,999.99',
        ];
    }
}
