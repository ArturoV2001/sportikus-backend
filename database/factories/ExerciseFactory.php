<?php

namespace Database\Factories;

use App\Models\Exercise\Exercise;
use App\Models\Muscle\Muscle;
use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise\Exercise>
 */
class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'muscular_group_id' => MuscularGroup::factory(),
            'muscle_id' => Muscle::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
