<?php

namespace Database\Factories;

use App\Models\Recommendation\Recommendation;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recommendation\Recommendation>
 */
class RecommendationFactory extends Factory
{
    protected $model = Recommendation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->exists() ? User::query()->inRandomOrder()->first()->id : User::factory(),
            'recomendacion' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
