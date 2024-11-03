<?php

namespace App\Models\MuscularGroup;

use App\Models\Exercise\Exercise;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait MuscularGroupRelationships
{
    public function exercise():HasMany
    {
        return $this->hasMany(Exercise::class);
    }
}
