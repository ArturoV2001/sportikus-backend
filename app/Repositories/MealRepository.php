<?php

namespace App\Repositories;

use App\Models\Meal\Meal;
use Illuminate\Database\Eloquent\Model;

class MealRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Meal $meal)
    {
        $this->model = $meal;
    }

    public function createMeal(array $data): Meal
    {
        return Meal::query()->create($data);
    }

    public function updateMeal(array $data, Meal $meal ): Meal
    {
        $meal->update($data);
        return $meal;
    }
}
