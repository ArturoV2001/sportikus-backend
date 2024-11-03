<?php

namespace App\Models\RoutineExercise;

use App\Models\Exercise\Exercise;
use App\Models\Routine\Routine;
use App\Models\RoutineExerciseBestPerformance\RoutineExerciseBestPerformance;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use function Symfony\Component\Translation\t;

trait RoutineExerciseRelationships
{
    public function routine():BelongsTo
    {
        return $this->belongsTo(Routine::class);
    }
    public function exercise():BelongsTo
    {
        return $this->belongsTo(Exercise::class);
    }
    public function routineExerciseBestPerformance():BelongsTo
    {
        return $this->belongsTo(RoutineExerciseBestPerformance::class);
    }
}
