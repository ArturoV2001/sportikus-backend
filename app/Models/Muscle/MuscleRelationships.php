<?php

namespace App\Models\Muscle;

use App\Models\Exercise\Exercise;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait MuscleRelationships
{
    public function exercise():HasMany
    {
        return $this->hasMany(Exercise::class);
    }
}
