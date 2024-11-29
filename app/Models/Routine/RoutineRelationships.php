<?php

namespace App\Models\Routine;

use App\Models\RoutineExercise\RoutineExercise;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RoutineRelationships
{
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function routineExercise(): HasMany
    {
        return $this->hasMany(RoutineExercise::class);
    }
}
