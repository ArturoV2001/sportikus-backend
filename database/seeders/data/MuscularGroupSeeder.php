<?php

namespace Database\Seeders\data;

use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Seeder;

class MuscularGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MuscularGroup::query()->insert([
            'id' => 1,
            'name' => 'Empuje',
        ]);
        MuscularGroup::query()->insert([
            'id' => 2,
            'name' => 'Jalón',
        ]);
        MuscularGroup::query()->insert([
            'id' => 3,
            'name' => 'Piernas',
        ]);
        MuscularGroup::query()->insert([
            'id' => 4,
            'name' => 'Core',
        ]);
    }
}
