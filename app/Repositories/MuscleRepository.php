<?php

namespace App\Repositories;

use App\Models\Muscle\Muscle;
use Illuminate\Database\Eloquent\Model;

class MuscleRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Muscle $muscle)
    {
        $this->model = $muscle;
    }

    public function createMuscle(array $data): Muscle
    {
        return Muscle::query()->create($data);
    }

    public function updateMuscle(array $data, Muscle $muscle): Muscle
    {
        $muscle->update($data);

        return $muscle;
    }
}
