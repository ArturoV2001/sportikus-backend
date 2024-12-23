<?php

namespace Database\Factories;

use App\Models\Exercise\Exercise;
use App\Models\Routine\Routine;
use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoutineExercise\RoutineExercise>
 */
class RoutineExerciceFactory extends Factory
{
    protected $model = RoutineExercise::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'routine_id' => Routine::factory(),
            'exercise_id' => Exercise::factory(),
            'repetitions' => $this->faker->numberBetween(8, 20),
            'sets' => $this->faker->numberBetween(3, 5),
            'day' => $this->faker->numberBetween(1, 7),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
