<?php

namespace Database\Factories;

use App\Models\Meal\Meal;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meal\Meal>
 */
class MealFactory extends Factory
{
    protected $model = Meal::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->exists() ? User::query()->inRandomOrder()->first()->id : User::factory(),
            'total_calories' => $this->faker->numberBetween(500, 1500),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
