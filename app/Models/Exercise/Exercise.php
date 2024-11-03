<?php

namespace App\Models\Exercise;

use Database\Factories\ExerciseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use ExerciseScopes;
    use ExerciseRelationships;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'exercises';

    protected $fillable = [
        'name',
        'description',
        'muscular_group_id',
        'muscle_id',
    ];

    protected static function newFactory()
    {
        return ExerciseFactory::new();
    }
}
