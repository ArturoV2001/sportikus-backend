<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MealFoodRequest extends FormRequest
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
            'meal_id' => 'required|exists:meals,id',
            'food_id' => 'required|exists:foods,id',
            'quantity' => 'required|integer',
            'calories' => 'required|numeric|between:0,9999.99',
        ];
    }
}
