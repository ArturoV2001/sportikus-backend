<?php

namespace App\Repositories;

use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Eloquent\Model;

class RoutineExerciseRepository extends IndexRepository
{
    public Model $model;

    public function __construct(RoutineExercise $routineExercise)
    {
        $this->model = $routineExercise;
    }

    public function createRoutineExercise(array $data): RoutineExercise
    {
        return RoutineExercise::query()->create($data);
    }

    public function updateRoutineExercise(array $data, RoutineExercise $routineExercise): RoutineExercise
    {
        $routineExercise->update($data);

        return $routineExercise;
    }
}
