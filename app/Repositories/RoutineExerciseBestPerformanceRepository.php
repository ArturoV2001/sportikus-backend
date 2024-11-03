<?php

namespace App\Repositories;

use App\Models\RoutineExerciseBestPerformance\RoutineExerciseBestPerformance;
use Illuminate\Database\Eloquent\Model;

class RoutineExerciseBestPerformanceRepository extends IndexRepository
{
    public Model $model;

    public function __construct(RoutineExerciseBestPerformance $routineExerciseBestPerformance)
    {
        $this->model = $routineExerciseBestPerformance;
    }

    public function createRoutineExerciseBestPerformance(array $data): RoutineExerciseBestPerformance
    {
        return RoutineExerciseBestPerformance::query()->create($data);
    }

    public function updateRoutineExerciseBestPerformance(array $data, RoutineExerciseBestPerformance $routineExerciseBestPerformance ): RoutineExerciseBestPerformance
    {
        $routineExerciseBestPerformance->update($data);
        return $routineExerciseBestPerformance;
    }
}
