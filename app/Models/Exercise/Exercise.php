<?php

namespace App\Models\Exercise;

use App\Models\Traits\WithAliasScopes;
use Database\Factories\ExerciseFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use ExerciseRelationships;
    use ExerciseScopes;
    use HasFactory;
    use SoftDeletes;
    use WithAliasScopes;

    protected $table = 'exercises';

    protected $fillable = [
        'name',
        'description',
        'muscle_id',
    ];

    protected static function newFactory()
    {
        return ExerciseFactory::new();
    }
}
