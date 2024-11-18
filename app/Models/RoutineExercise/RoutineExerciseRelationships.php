<?php

namespace App\Models\RoutineExercise;

use App\Models\Exercise\Exercise;
use App\Models\ExerciseBestPerformance\ExerciseBestPerformance;
use App\Models\Routine\Routine;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RoutineExerciseRelationships
{
    public function routine(): BelongsTo
    {
        return $this->belongsTo(Routine::class);
    }

    public function exercise(): BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }

    public function routineExerciseBestPerformance(): BelongsTo
    {
        return $this->belongsTo(ExerciseBestPerformance::class);
    }
}
