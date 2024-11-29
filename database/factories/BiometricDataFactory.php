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
            'user_id' => optional(User::query()->inRandomOrder()->first())->id,
            'heart_frequency' => $this->faker->numberBetween(50, 180),
            'steps' => $this->faker->numberBetween(0, 30000),
            'distance' => $this->faker->randomFloat(2, 0, 99.99),
            'oxygenation' => $this->faker->numberBetween(90, 100),
            'sleep_quantity' => $this->faker->numberBetween(0, 720),
            'sleep_quality_awake' => $this->faker->numberBetween(0, 60),
            'sleep_quality_rem' => $this->faker->numberBetween(0, 120),
            'sleep_quality_core' => $this->faker->numberBetween(0, 240),
            'sleep_quality_deep' => $this->faker->numberBetween(0, 120),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
