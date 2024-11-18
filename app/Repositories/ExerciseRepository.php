<?php

namespace App\Repositories;

use App\Models\Exercise\Exercise;
use Illuminate\Database\Eloquent\Model;

class ExerciseRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Exercise $exercise)
    {
        $this->model = $exercise;
    }

    public function createExercise(array $data): Exercise
    {
        return Exercise::query()->create($data);
    }

    public function updateExercise(array $data, Exercise $exercise): Exercise
    {
        $exercise->update($data);

        return $exercise;
    }
}
