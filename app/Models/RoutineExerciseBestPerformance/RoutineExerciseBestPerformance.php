<?php

namespace App\Models\RoutineExerciseBestPerformance;

use Database\Factories\RoutineExercisesBestPerformanceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoutineExerciseBestPerformance extends Model
{
    use HasFactory;
    use SoftDeletes;
    use RoutineExerciseBestPerformanceRelationships;
    use RoutineExerciseBestPerformanceScopes;

    protected $table = 'routine_exercises_best_performance';

    protected $fillable = [
        'routine_exercise_id',
        'weight',
        'sets',
    ];

    protected static function newFactory()
    {
        return RoutineExercisesBestPerformanceFactory::new();
    }
}
