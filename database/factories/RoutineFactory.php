<?php

namespace Database\Factories;

use App\Models\Routine\Routine;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Routine\Routine>
 */
class RoutineFactory extends Factory
{
    protected $model = Routine::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'frequency' => $this->faker->numberBetween(1, 7),
            'duration' => $this->faker->numberBetween(15, 90),
            'user_id' => User::query()->exists() ? User::query()->inRandomOrder()->first()->id : User::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
