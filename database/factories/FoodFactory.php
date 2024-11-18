<?php

namespace Database\Factories;

use App\Models\Category\Category;
use App\Models\Food\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food\Food>
 */
class FoodFactory extends Factory
{
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
            'calories_per_unit' => $this->faker->numberBetween(50, 500),
            'category_id' => Category::factory(),
            'quality' => $this->faker->numberBetween(1, 5),
            'protein' => $this->faker->numberBetween(10, 100),
            'fat' => $this->faker->numberBetween(1, 100),
            'carbohidrate' => $this->faker->numberBetween(1, 100),
            'step' => $this->faker->randomFloat(2, 1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
