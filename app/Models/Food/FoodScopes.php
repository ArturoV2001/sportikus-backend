<?php

namespace App\Models\Food;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Builder;

trait FoodScopes
{
    public function scopeFilterByColumn(Builder $query, string $column, mixed $value): void
    {
        switch ($column) {
            default:
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

    public function withAliasScopeCategoryName(Builder $query): void
    {
        $query->addSelect([
            'category_name' => Category::query()->select('name')
                ->whereColumn('foods.category_id', 'categories.id'),
        ]);
    }
}
