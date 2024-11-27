<?php

namespace App\Models\Muscle;

use Database\Factories\MuscleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muscle extends Model
{
    use HasFactory;
    use MuscleRelationships;
    use MuscleScopes;

    protected $table = 'muscles';

    protected $fillable = [
        'name',
        'description',
        'muscular_group_id',
    ];

    protected static function newFactory()
    {
        return MuscleFactory::new();
    }
}
