<?php

namespace App\Models\Exercise;

use App\Models\Muscle\Muscle;
use App\Models\MuscularGroup\MuscularGroup;
use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait ExerciseRelationships
{
    public function muscularGroup(): BelongsTo
    {
        return $this->belongsTo(MuscularGroup::class);
    }

    public function muscle(): BelongsTo
    {
        return $this->belongsTo(Muscle::class);
    }

    public function routineExercise(): HasMany
    {
        return $this->hasMany(RoutineExercise::class);
    }
}
