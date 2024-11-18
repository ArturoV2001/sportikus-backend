<?php

namespace App\Repositories;

use App\Models\Routine\Routine;
use Illuminate\Database\Eloquent\Model;

class RoutineRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Routine $routine)
    {
        $this->model = $routine;
    }

    public function createRoutine(array $data): Routine
    {
        return Routine::query()->create($data);
    }

    public function updateRoutine(array $data, Routine $routine): Routine
    {
        $routine->update($data);

        return $routine;
    }
}
