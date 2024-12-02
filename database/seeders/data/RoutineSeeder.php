<?php

namespace Database\Seeders\data;

use App\Models\Routine\Routine;
use Illuminate\Database\Seeder;

class RoutineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Routine::query()->insert([
            ['id' => 1, 'frequency' => 2, 'duration' => 60, 'days' => 2, 'ailment_id' => 1],
            ['id' => 2, 'frequency' => 3, 'duration' => 50, 'days' => 3, 'ailment_id' => 1],
            ['id' => 3, 'frequency' => 6, 'duration' => 45, 'days' => 6, 'ailment_id' => 1],
        ]);
        Routine::query()->insert(
            [
                ['id' => 4, 'frequency' => 2, 'duration' => 60, 'days' => 2, 'ailment_id' => 2],
                ['id' => 5, 'frequency' => 3, 'duration' => 50, 'days' => 3, 'ailment_id' => 2],
                ['id' => 6, 'frequency' => 6, 'duration' => 45, 'days' => 6, 'ailment_id' => 2],
            ]
        );
        Routine::query()->insert(
            [
                ['id' => 7, 'frequency' => 2, 'duration' => 60, 'days' => 2, 'ailment_id' => 3],
                ['id' => 8, 'frequency' => 3, 'duration' => 50, 'days' => 3, 'ailment_id' => 3],
                ['id' => 9, 'frequency' => 6, 'duration' => 45, 'days' => 6, 'ailment_id' => 3],
            ]
        );
        Routine::query()->insert(
            [
                ['id' => 10, 'frequency' => 2, 'duration' => 50, 'days' => 2, 'ailment_id' => 4],
                ['id' => 11, 'frequency' => 3, 'duration' => 45, 'days' => 3, 'ailment_id' => 4],
                ['id' => 12, 'frequency' => 6, 'duration' => 40, 'days' => 6, 'ailment_id' => 4],
            ]
        );
        Routine::query()->insert(
            [
                ['id' => 13, 'frequency' => 2, 'duration' => 60, 'days' => 2, 'ailment_id' => 5],
                ['id' => 14, 'frequency' => 3, 'duration' => 50, 'days' => 3, 'ailment_id' => 5],
                ['id' => 15, 'frequency' => 6, 'duration' => 45, 'days' => 6, 'ailment_id' => 5],
            ]
        );
        Routine::query()->insert(
            [
                ['id' => 16, 'frequency' => 2, 'duration' => 45, 'days' => 2, 'ailment_id' => 6],
                ['id' => 17, 'frequency' => 3, 'duration' => 50, 'days' => 3, 'ailment_id' => 6],
                ['id' => 18, 'frequency' => 6, 'duration' => 40, 'days' => 6, 'ailment_id' => 6],
            ]
        );
        Routine::query()->insert(
            [
                ['id' => 19, 'frequency' => 2, 'duration' => 50, 'days' => 2, 'ailment_id' => 7],
                ['id' => 20, 'frequency' => 3, 'duration' => 45, 'days' => 3, 'ailment_id' => 7],
                ['id' => 21, 'frequency' => 6, 'duration' => 40, 'days' => 6, 'ailment_id' => 7],
            ]
        );
        Routine::query()->insert(
            [
                ['id' => 22, 'frequency' => 2, 'duration' => 60, 'days' => 2, 'ailment_id' => null],
                ['id' => 23, 'frequency' => 3, 'duration' => 50, 'days' => 3, 'ailment_id' => null],
                ['id' => 24, 'frequency' => 6, 'duration' => 45, 'days' => 6, 'ailment_id' => null],
            ]
        );
    }
}
