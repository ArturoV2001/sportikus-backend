<?php

namespace Database\Factories;

use App\Models\Food\Food;
use App\Models\Meal\Meal;
use App\Models\MealFood\MealFood;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MealFood\MealFood>
 */
class MealFoodFactory extends Factory
{
    protected $model = MealFood::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meal_id' => Meal::factory(),
            'food_id' => Food::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
            'calories' => $this->faker->randomFloat(2, 100, 500),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
