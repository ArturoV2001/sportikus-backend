<?php

namespace App\Models\Category;

use App\Models\Food\Food;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CategoryRelationships
{
    public function food(): HasMany
    {
        return $this->hasMany(Food::class);
    }
}
