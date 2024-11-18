<?php

namespace App\Models\Food;

use App\Models\Category\Category;
use App\Models\FoodUnit\FoodUnit;
use App\Models\MealFood\MealFood;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait FoodRelationships
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function foodUnit(): BelongsTo
    {
        return $this->belongsTo(FoodUnit::class);
    }

    public function mealFoods(): HasMany
    {
        return $this->hasMany(MealFood::class);
    }
}
