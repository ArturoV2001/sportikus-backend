<?php

namespace App\Repositories;

use App\Models\MealFood\MealFood;
use Illuminate\Database\Eloquent\Model;

class MealFoodRepository extends IndexRepository
{
    public Model $model;

    public function __construct(MealFood $mealFood)
    {
        $this->model = $mealFood;
    }

    public function createMealFood(array $data): MealFood
    {
        return MealFood::query()->create($data);
    }

    public function updateMealFood(array $data, MealFood $mealFood ): MealFood
    {
        $mealFood->update($data);
        return $mealFood;
    }
}
