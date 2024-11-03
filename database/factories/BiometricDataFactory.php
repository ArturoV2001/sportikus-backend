<?php

namespace Database\Factories;

use App\Models\BiometricData\BiometricData;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BiometricData\BiometricData>
 */
class BiometricDataFactory extends Factory
{
    protected $model = BiometricData::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->exists() ? User::query()->inRandomOrder()->first()->id : User::factory(), // Relación con User
            'heart_frequency' => $this->faker->numberBetween(60, 100),
            'pressure' => $this->faker->numberBetween(90, 140),
            'calories' => $this->faker->numberBetween(1500, 3000),
            'sleep_quality' => $this->faker->randomFloat(2, 1, 10),
            'sleep_minutes' => $this->faker->numberBetween(300, 600),
            'steps' => $this->faker->numberBetween(1000, 10000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
