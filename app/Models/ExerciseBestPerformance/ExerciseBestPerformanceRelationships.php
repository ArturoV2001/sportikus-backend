<?php

namespace App\Models\ExerciseBestPerformance;

use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait ExerciseBestPerformanceRelationships
{
    public function routineExercise(): BelongsTo
    {
        return $this->belongsTo(RoutineExercise::class);
    }
}
