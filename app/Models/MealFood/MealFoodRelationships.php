<?php

namespace App\Models\MealFood;

use App\Models\Food\Food;
use App\Models\Meal\Meal;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait MealFoodRelationships
{
    public function meal(): BelongsTo
    {
        return $this->belongsTo(Meal::class);
    }

    public function food(): BelongsTo
    {
        return $this->belongsTo(Food::class);
    }
}
