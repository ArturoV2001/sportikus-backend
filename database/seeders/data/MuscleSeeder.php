<?php

namespace Database\Seeders\data;

use App\Models\Muscle\Muscle;
use Illuminate\Database\Seeder;

class MuscleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Muscle::query()->insert([
            'id' => 1,
            'name' => 'Pecho',
            'muscular_group_id' => 1,
        ]);
        Muscle::query()->insert([
            'id' => 2,
            'name' => 'Espalda',
            'muscular_group_id' => 2,
        ]);
        Muscle::query()->insert([
            'id' => 3,
            'name' => 'Hombros',
            'muscular_group_id' => 1,
        ]);
        Muscle::query()->insert([
            'id' => 4,
            'name' => 'Cuádriceps',
            'muscular_group_id' => 3,
        ]);
        Muscle::query()->insert([
            'id' => 5,
            'name' => 'Femoral',
            'muscular_group_id' => 3,
        ]);
        Muscle::query()->insert([
            'id' => 6,
            'name' => 'Gemelos',
            'muscular_group_id' => 3,
        ]);
        Muscle::query()->insert([
            'id' => 7,
            'name' => 'Glúteo',
            'muscular_group_id' => 3,
        ]);
        Muscle::query()->insert([
            'id' => 8,
            'name' => 'Bíceps',
            'muscular_group_id' => 2,
        ]);
        Muscle::query()->insert([
            'id' => 9,
            'name' => 'Tríceps',
            'muscular_group_id' => 1,
        ]);
        Muscle::query()->insert([
            'id' => 10,
            'name' => 'Trapecio',
            'muscular_group_id' => 2,
        ]);
        Muscle::query()->insert([
            'id' => 11,
            'name' => 'Abdomen',
            'muscular_group_id' => 4,
        ]);

    }
}
