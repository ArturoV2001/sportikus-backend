<?php

namespace App\Repositories;

use App\Models\Food\Food;
use Illuminate\Database\Eloquent\Model;

class FoodRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Food $food)
    {
        $this->model = $food;
    }

    public function createFood(array $data): Food
    {
        return Food::query()->create($data);
    }

    public function updateFood(array $data, Food $food): Food
    {
        $food->update($data);

        return $food;
    }
}
