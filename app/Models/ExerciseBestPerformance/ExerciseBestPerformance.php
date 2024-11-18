<?php

namespace App\Models\ExerciseBestPerformance;

use Database\Factories\RoutineExercisesBestPerformanceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExerciseBestPerformance extends Model
{
    use ExerciseBestPerformanceRelationships;
    use ExerciseBestPerformanceScopes;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exercises_best_performance';

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
