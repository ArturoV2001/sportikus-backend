<?php

namespace App\Models\RoutineExerciseBestPerformance;

use App\Models\RoutineExercise\RoutineExercise;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RoutineExerciseBestPerformanceRelationships
{
    public function routineExercise():BelongsTo
    {
        return $this->belongsTo(RoutineExercise::class);
    }
}
