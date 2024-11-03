<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Userdef>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'weight' => $this->faker->randomFloat(3, 50, 100),
            'birthdate' => $this->faker->date(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
