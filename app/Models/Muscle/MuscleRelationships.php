<?php

namespace App\Models\Muscle;

use App\Models\Exercise\Exercise;
use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait MuscleRelationships
{
    public function exercise(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }

    public function muscularGroup(): BelongsTo
    {
        return $this->belongsTo(MuscularGroup::class);
    }
}
