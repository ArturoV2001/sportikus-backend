<?php

namespace Database\Seeders\data;

use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Seeder;

class RoutineExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoutineExercise::query()->insert([
            // Rutina 1 (2 días: tren inferior y superior)
            ['id' => 1, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 1, 'exercise_id' => 10, 'day' => 1],
            ['id' => 2, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 1, 'exercise_id' => 7, 'day' => 1],
            ['id' => 3, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 1, 'exercise_id' => 8, 'day' => 1],
            ['id' => 4, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 1, 'exercise_id' => 50, 'day' => 2],
            ['id' => 5, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 1, 'exercise_id' => 45, 'day' => 2],
            ['id' => 6, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 1, 'exercise_id' => 46, 'day' => 2],

            // Rutina 2 (3 días: push, pull, leg)
            ['id' => 7, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 1, 'day' => 1],
            ['id' => 8, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 2, 'day' => 1],
            ['id' => 9, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 2, 'exercise_id' => 3, 'day' => 1],
            ['id' => 10, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 26, 'day' => 2],
            ['id' => 11, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 25, 'day' => 2],
            ['id' => 12, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 22, 'day' => 2],
            ['id' => 13, 'repetitions' => 15, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 41, 'day' => 3],
            ['id' => 14, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 2, 'exercise_id' => 43, 'day' => 3],
            ['id' => 15, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 2, 'exercise_id' => 50, 'day' => 3],

            // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
            ['id' => 16, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 3, 'exercise_id' => 1, 'day' => 1],
            ['id' => 17, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 3, 'exercise_id' => 3, 'day' => 1],
            ['id' => 18, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 3, 'exercise_id' => 45, 'day' => 2],
            ['id' => 19, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 3, 'exercise_id' => 41, 'day' => 2],
            ['id' => 20, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 3, 'exercise_id' => 21, 'day' => 3],
            ['id' => 21, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 3, 'exercise_id' => 22, 'day' => 3],
            ['id' => 22, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 3, 'exercise_id' => 81, 'day' => 4],
            ['id' => 23, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 3, 'exercise_id' => 83, 'day' => 4],
            ['id' => 24, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 3, 'exercise_id' => 43, 'day' => 5],
            ['id' => 25, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 3, 'exercise_id' => 44, 'day' => 5],
            ['id' => 26, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 3, 'exercise_id' => 101, 'day' => 6],
            ['id' => 27, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 3, 'exercise_id' => 105, 'day' => 6],
        ]);
        RoutineExercise::query()->insert(
            [
                // Rutina 1 (2 días: tren inferior y superior)
                ['id' => 28, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 4, 'exercise_id' => 7, 'day' => 1],
                ['id' => 29, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 4, 'exercise_id' => 10, 'day' => 1],
                ['id' => 30, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 4, 'exercise_id' => 3, 'day' => 1],
                ['id' => 31, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 4, 'exercise_id' => 50, 'day' => 2],
                ['id' => 32, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 4, 'exercise_id' => 45, 'day' => 2],
                ['id' => 33, 'repetitions' => 15, 'sets' => 2, 'routine_id' => 4, 'exercise_id' => 46, 'day' => 2],

                // Rutina 2 (3 días: push, pull, leg)
                ['id' => 34, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 5, 'exercise_id' => 2, 'day' => 1],
                ['id' => 35, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 5, 'exercise_id' => 1, 'day' => 1],
                ['id' => 36, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 5, 'exercise_id' => 5, 'day' => 1],
                ['id' => 37, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 5, 'exercise_id' => 26, 'day' => 2],
                ['id' => 38, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 5, 'exercise_id' => 21, 'day' => 2],
                ['id' => 39, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 5, 'exercise_id' => 25, 'day' => 2],
                ['id' => 40, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 5, 'exercise_id' => 41, 'day' => 3],
                ['id' => 41, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 5, 'exercise_id' => 43, 'day' => 3],
                ['id' => 42, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 5, 'exercise_id' => 50, 'day' => 3],

                // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
                ['id' => 43, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 1, 'day' => 1],
                ['id' => 44, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 7, 'day' => 1],
                ['id' => 45, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 44, 'day' => 2],
                ['id' => 46, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 50, 'day' => 2],
                ['id' => 47, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 6, 'exercise_id' => 21, 'day' => 3],
                ['id' => 48, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 6, 'exercise_id' => 25, 'day' => 3],
                ['id' => 49, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 6, 'exercise_id' => 81, 'day' => 4],
                ['id' => 50, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 83, 'day' => 4],
                ['id' => 51, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 6, 'exercise_id' => 41, 'day' => 5],
                ['id' => 52, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 6, 'exercise_id' => 45, 'day' => 5],
                ['id' => 53, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 101, 'day' => 6],
                ['id' => 54, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 6, 'exercise_id' => 106, 'day' => 6],
            ]
        );
        RoutineExercise::query()->insert(
            [
                // Rutina 1 (2 días: tren inferior y superior)
                ['id' => 55, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 7, 'exercise_id' => 7, 'day' => 1],
                ['id' => 56, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 7, 'exercise_id' => 10, 'day' => 1],
                ['id' => 57, 'repetitions' => 15, 'sets' => 2, 'routine_id' => 7, 'exercise_id' => 8, 'day' => 1],
                ['id' => 58, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 7, 'exercise_id' => 50, 'day' => 2],
                ['id' => 59, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 7, 'exercise_id' => 46, 'day' => 2],
                ['id' => 60, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 7, 'exercise_id' => 41, 'day' => 2],

                // Rutina 2 (3 días: push, pull, leg)
                ['id' => 61, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 1, 'day' => 1],
                ['id' => 62, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 8, 'exercise_id' => 2, 'day' => 1],
                ['id' => 63, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 5, 'day' => 1],
                ['id' => 64, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 21, 'day' => 2],
                ['id' => 65, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 22, 'day' => 2],
                ['id' => 66, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 25, 'day' => 2],
                ['id' => 67, 'repetitions' => 15, 'sets' => 2, 'routine_id' => 8, 'exercise_id' => 41, 'day' => 3],
                ['id' => 68, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 45, 'day' => 3],
                ['id' => 69, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 8, 'exercise_id' => 50, 'day' => 3],

                // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
                ['id' => 70, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 1, 'day' => 1],
                ['id' => 71, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 7, 'day' => 1],
                ['id' => 72, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 9, 'exercise_id' => 45, 'day' => 2],
                ['id' => 73, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 9, 'exercise_id' => 44, 'day' => 2],
                ['id' => 74, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 9, 'exercise_id' => 21, 'day' => 3],
                ['id' => 75, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 25, 'day' => 3],
                ['id' => 76, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 9, 'exercise_id' => 81, 'day' => 4],
                ['id' => 77, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 83, 'day' => 4],
                ['id' => 78, 'repetitions' => 15, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 43, 'day' => 5],
                ['id' => 79, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 50, 'day' => 5],
                ['id' => 80, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 9, 'exercise_id' => 105, 'day' => 6],
                ['id' => 81, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 9, 'exercise_id' => 101, 'day' => 6],
            ]
        );
        RoutineExercise::query()->insert(
            [
                // Rutina 1 (2 días: tren inferior y superior)
                ['id' => 82, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 10, 'exercise_id' => 7, 'day' => 1],
                ['id' => 83, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 10, 'exercise_id' => 10, 'day' => 1],
                ['id' => 84, 'repetitions' => 15, 'sets' => 2, 'routine_id' => 10, 'exercise_id' => 11, 'day' => 1],
                ['id' => 85, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 10, 'exercise_id' => 50, 'day' => 2],
                ['id' => 86, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 10, 'exercise_id' => 45, 'day' => 2],
                ['id' => 87, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 10, 'exercise_id' => 46, 'day' => 2],

                // Rutina 2 (3 días: push, pull, leg)
                ['id' => 88, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 1, 'day' => 1],
                ['id' => 89, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 11, 'exercise_id' => 2, 'day' => 1],
                ['id' => 90, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 7, 'day' => 1],
                ['id' => 91, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 21, 'day' => 2],
                ['id' => 92, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 25, 'day' => 2],
                ['id' => 93, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 26, 'day' => 2],
                ['id' => 94, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 41, 'day' => 3],
                ['id' => 95, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 11, 'exercise_id' => 43, 'day' => 3],
                ['id' => 96, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 11, 'exercise_id' => 50, 'day' => 3],

                // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
                ['id' => 97, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 1, 'day' => 1],
                ['id' => 98, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 12, 'exercise_id' => 7, 'day' => 1],
                ['id' => 99, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 44, 'day' => 2],
                ['id' => 100, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 45, 'day' => 2],
                ['id' => 101, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 12, 'exercise_id' => 21, 'day' => 3],
                ['id' => 102, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 22, 'day' => 3],
                ['id' => 103, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 81, 'day' => 4],
                ['id' => 104, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 12, 'exercise_id' => 83, 'day' => 4],
                ['id' => 105, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 41, 'day' => 5],
                ['id' => 106, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 12, 'exercise_id' => 50, 'day' => 5],
                ['id' => 107, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 12, 'exercise_id' => 101, 'day' => 6],
                ['id' => 108, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 12, 'exercise_id' => 106, 'day' => 6],
            ]
        );
        RoutineExercise::query()->insert(
            [
                // Rutina 1 (2 días: tren inferior y superior)
                ['id' => 109, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 13, 'exercise_id' => 7, 'day' => 1],
                ['id' => 110, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 13, 'exercise_id' => 1, 'day' => 1],
                ['id' => 111, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 13, 'exercise_id' => 11, 'day' => 1],
                ['id' => 112, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 13, 'exercise_id' => 41, 'day' => 2],
                ['id' => 113, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 13, 'exercise_id' => 45, 'day' => 2],
                ['id' => 114, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 13, 'exercise_id' => 43, 'day' => 2],

                // Rutina 2 (3 días: push, pull, leg)
                ['id' => 115, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 1, 'day' => 1],
                ['id' => 116, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 7, 'day' => 1],
                ['id' => 117, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 14, 'exercise_id' => 3, 'day' => 1],
                ['id' => 118, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 21, 'day' => 2],
                ['id' => 119, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 26, 'day' => 2],
                ['id' => 120, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 14, 'exercise_id' => 25, 'day' => 2],
                ['id' => 121, 'repetitions' => 15, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 41, 'day' => 3],
                ['id' => 122, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 50, 'day' => 3],
                ['id' => 123, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 14, 'exercise_id' => 45, 'day' => 3],

                // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
                ['id' => 124, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 1, 'day' => 1],
                ['id' => 125, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 15, 'exercise_id' => 11, 'day' => 1],
                ['id' => 126, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 41, 'day' => 2],
                ['id' => 127, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 43, 'day' => 2],
                ['id' => 128, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 21, 'day' => 3],
                ['id' => 129, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 25, 'day' => 3],
                ['id' => 130, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 81, 'day' => 4],
                ['id' => 131, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 15, 'exercise_id' => 83, 'day' => 4],
                ['id' => 132, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 43, 'day' => 5],
                ['id' => 133, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 45, 'day' => 5],
                ['id' => 134, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 15, 'exercise_id' => 105, 'day' => 6],
                ['id' => 135, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 15, 'exercise_id' => 101, 'day' => 6],
            ]
        );
        RoutineExercise::query()->insert(
            [
                // Rutina 1 (2 días: tren inferior y superior)
                ['id' => 136, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 16, 'exercise_id' => 1, 'day' => 1],
                ['id' => 137, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 16, 'exercise_id' => 11, 'day' => 1],
                ['id' => 138, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 16, 'exercise_id' => 7, 'day' => 1],
                ['id' => 139, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 16, 'exercise_id' => 41, 'day' => 2],
                ['id' => 140, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 16, 'exercise_id' => 50, 'day' => 2],
                ['id' => 141, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 16, 'exercise_id' => 45, 'day' => 2],

                // Rutina 2 (3 días: push, pull, leg)
                ['id' => 142, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 17, 'exercise_id' => 1, 'day' => 1],
                ['id' => 143, 'repetitions' => 10, 'sets' => 2, 'routine_id' => 17, 'exercise_id' => 7, 'day' => 1],
                ['id' => 144, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 17, 'exercise_id' => 3, 'day' => 1],
                ['id' => 145, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 17, 'exercise_id' => 21, 'day' => 2],
                ['id' => 146, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 17, 'exercise_id' => 25, 'day' => 2],
                ['id' => 147, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 17, 'exercise_id' => 22, 'day' => 2],
                ['id' => 148, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 17, 'exercise_id' => 41, 'day' => 3],
                ['id' => 149, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 17, 'exercise_id' => 50, 'day' => 3],
                ['id' => 150, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 17, 'exercise_id' => 45, 'day' => 3],

                // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
                ['id' => 151, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 1, 'day' => 1],
                ['id' => 152, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 18, 'exercise_id' => 7, 'day' => 1],
                ['id' => 153, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 41, 'day' => 2],
                ['id' => 154, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 43, 'day' => 2],
                ['id' => 155, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 18, 'exercise_id' => 21, 'day' => 3],
                ['id' => 156, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 26, 'day' => 3],
                ['id' => 157, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 81, 'day' => 4],
                ['id' => 158, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 83, 'day' => 4],
                ['id' => 159, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 41, 'day' => 5],
                ['id' => 160, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 50, 'day' => 5],
                ['id' => 161, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 105, 'day' => 6],
                ['id' => 162, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 18, 'exercise_id' => 101, 'day' => 6],
            ]
        );
        RoutineExercise::query()->insert(
            [
                // Rutina 1 (2 días: tren inferior y superior)
                ['id' => 163, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 19, 'exercise_id' => 7, 'day' => 1],
                ['id' => 164, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 19, 'exercise_id' => 10, 'day' => 1],
                ['id' => 165, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 19, 'exercise_id' => 11, 'day' => 1],
                ['id' => 166, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 19, 'exercise_id' => 41, 'day' => 2],
                ['id' => 167, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 19, 'exercise_id' => 43, 'day' => 2],
                ['id' => 168, 'repetitions' => 15, 'sets' => 2, 'routine_id' => 19, 'exercise_id' => 50, 'day' => 2],

                // Rutina 2 (3 días: push, pull, leg)
                ['id' => 169, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 20, 'exercise_id' => 1, 'day' => 1],
                ['id' => 170, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 20, 'exercise_id' => 7, 'day' => 1],
                ['id' => 171, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 20, 'exercise_id' => 3, 'day' => 1],
                ['id' => 172, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 20, 'exercise_id' => 21, 'day' => 2],
                ['id' => 173, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 20, 'exercise_id' => 25, 'day' => 2],
                ['id' => 174, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 20, 'exercise_id' => 22, 'day' => 2],
                ['id' => 175, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 20, 'exercise_id' => 41, 'day' => 3],
                ['id' => 176, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 20, 'exercise_id' => 50, 'day' => 3],
                ['id' => 177, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 20, 'exercise_id' => 45, 'day' => 3],

                // Rutina 3 (6 días: pecho, pierna, espalda, hombro, pierna, brazos)
                ['id' => 178, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 21, 'exercise_id' => 1, 'day' => 1],
                ['id' => 179, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 7, 'day' => 1],
                ['id' => 180, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 41, 'day' => 2],
                ['id' => 181, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 43, 'day' => 2],
                ['id' => 182, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 21, 'day' => 3],
                ['id' => 183, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 26, 'day' => 3],
                ['id' => 184, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 81, 'day' => 4],
                ['id' => 185, 'repetitions' => 12, 'sets' => 2, 'routine_id' => 21, 'exercise_id' => 83, 'day' => 4],
                ['id' => 186, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 41, 'day' => 5],
                ['id' => 187, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 50, 'day' => 5],
                ['id' => 188, 'repetitions' => 12, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 105, 'day' => 6],
                ['id' => 189, 'repetitions' => 10, 'sets' => 3, 'routine_id' => 21, 'exercise_id' => 101, 'day' => 6],
            ]
        );
    }
}
