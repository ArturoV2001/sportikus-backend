<?php

namespace App\Repositories;

use App\Models\ExerciseBestPerformance\ExerciseBestPerformance;
use Illuminate\Database\Eloquent\Model;

class ExerciseBestPerformanceRepository extends IndexRepository
{
    public Model $model;

    public function __construct(ExerciseBestPerformance $exerciseBestPerformance)
    {
        $this->model = $exerciseBestPerformance;
    }

    public function createExerciseBestPerformance(array $data): ExerciseBestPerformance
    {
        return ExerciseBestPerformance::query()->create($data);
    }

    public function updateExerciseBestPerformance(array $data, ExerciseBestPerformance $exerciseBestPerformance): ExerciseBestPerformance
    {
        $exerciseBestPerformance->update($data);

        return $exerciseBestPerformance;
    }
}
