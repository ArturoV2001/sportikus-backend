<?php

namespace App\Models\Routine;

use Database\Factories\RoutineFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Routine extends Model
{
    use HasFactory;
    use SoftDeletes;
    use RoutineRelationships;
    use RoutineScopes;

    protected $table = 'routines';

    protected $fillable = [
        'frequency',
        'duration',
        'user_id'
    ];

    protected static function newFactory()
    {
        return RoutineFactory::new();
    }
}
