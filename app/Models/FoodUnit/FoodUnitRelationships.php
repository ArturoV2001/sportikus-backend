<?php

namespace App\Models\FoodUnit;

use App\Models\Food\Food;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait FoodUnitRelationships
{
    public function food(): HasMany
    {
        return $this->hasMany(Food::class);
    }
}
