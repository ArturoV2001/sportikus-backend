<?php

namespace App\Models\RoutineExercise;

use Database\Factories\RoutineExerciceFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoutineExercise extends Model
{
    use HasFactory;
    use RoutineExerciseRelationships;
    use RoutineExerciseScopes;
    use SoftDeletes;

    protected $table = 'routine_exercises';

    protected $fillable = [
        'repetitions',
        'sets',
        'routine_id',
        'exercise_id',
        'day',
    ];

    protected static function newFactory()
    {
        return RoutineExerciceFactory::new();
    }
}
