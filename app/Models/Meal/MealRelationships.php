<?php

namespace App\Models\Meal;

use App\Models\MealFood\MealFood;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait MealRelationships
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function mealFoods(): HasMany
    {
        return $this->hasMany(MealFood::class);
    }
}
