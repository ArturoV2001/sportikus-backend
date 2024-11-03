<?php

namespace Database\Factories;

use App\Models\Ailment\Ailment;
use App\Models\AilmentUser\AilmentUser;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AilmentUser\AilmentUser>
 */
class AilmentUserFactory extends Factory
{
    protected $model = AilmentUser::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->exists() ? User::query()->inRandomOrder()->first()->id : User::factory(),
            'ailment_id' => Ailment::query()->exists() ? Ailment::query()->inRandomOrder()->first()->id : Ailment::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
