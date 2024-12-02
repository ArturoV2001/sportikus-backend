<?php

namespace App\Models\User;

use App\Models\BiometricData\BiometricData;
use App\Models\Meal\Meal;
use App\Models\Recommendation\Recommendation;
use App\Models\Routine\Routine;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserRelationships
{
    public function biometricData(): HasMany
    {
        return $this->hasMany(BiometricData::class);
    }

    public function meals(): HasMany
    {
        return $this->hasMany(Meal::class);
    }

    public function recommendations(): HasMany
    {
        return $this->hasMany(Recommendation::class);
    }

    public function routine(): BelongsTo
    {
        return $this->belongsTo(Routine::class);
    }

    public function userType(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
