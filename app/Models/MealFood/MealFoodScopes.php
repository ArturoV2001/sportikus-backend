<?php

namespace App\Models\MealFood;

use App\Models\Food\Food;
use App\Models\Meal\Meal;
use Illuminate\Database\Eloquent\Builder;

trait MealFoodScopes
{
    public function scopeFilterByColumn(Builder $query, string $column, mixed $value): void
    {
        switch ($column) {
            default:
                if ($this->hasAliasScope($column)) {
                    $query->having($column, 'LIKE', $value);

                    return;
                }
                if ($this->hasGetMutator($column)) {
                    return;
                }
                $query->where($column, 'like', '%' . trim($value, '%') . '%');
                break;
        }
    }

    public function scopeOrderByColumn(Builder $query, string $orderBy, string $order): void
    {
        switch ($orderBy) {
            default:
                if ($this->hasGetMutator($orderBy)) {
                    return;
                }
                $query->orderBy($orderBy, $order);
                break;
        }
    }

    public function withAliasScopeMealName(Builder $query): void
    {
        $query->addSelect([
            'meal_name' => Meal::query()->select('name')
                ->whereColumn('meals.id', 'meal_foods.meal_id'),
        ]);
    }

    public function scopeWithAliasScopeFoodName(Builder $query): void
    {
        $query->addSelect([
            'food_name' => Food::query()->select('name')
                ->whereColumn('foods.id', 'meal_foods.food_id'),
        ]);
    }
}
