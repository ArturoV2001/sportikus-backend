<?php

namespace App\Models\Exercise;

use App\Models\Muscle\Muscle;
use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait ExerciseRelationships
{
    public function muscle(): BelongsTo
    {
        return $this->belongsTo(Muscle::class);
    }

    public function routineExercise(): HasMany
    {
        return $this->hasMany(RoutineExercise::class);
    }
}
