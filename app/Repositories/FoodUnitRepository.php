<?php

namespace App\Repositories;

use App\Models\FoodUnit\FoodUnit;
use Illuminate\Database\Eloquent\Model;

class FoodUnitRepository extends IndexRepository
{
    public Model $model;

    public function __construct(FoodUnit $foodUnit)
    {
        $this->model = $foodUnit;
    }

    public function createFoodUnit(array $data): FoodUnit
    {
        return FoodUnit::query()->create($data);
    }

    public function updateFoodUnit(array $data, FoodUnit $foodUnit): FoodUnit
    {
        $foodUnit->update($data);

        return $foodUnit;
    }
}
