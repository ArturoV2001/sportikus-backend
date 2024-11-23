<?php

namespace App\Models\Muscle;

use Database\Factories\MuscleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Muscle extends Model
{
    use HasFactory;
    use MuscleRelationships;
    use MuscleScopes;

    protected $table = 'muscles';

    protected $fillable = [
        'name',
        'description',
    ];

    protected static function newFactory()
    {
        return MuscleFactory::new();
    }
}
