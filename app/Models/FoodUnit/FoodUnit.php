<?php

namespace App\Models\FoodUnit;

use Database\Factories\FoodUnitFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodUnit extends Model
{
    use FoodUnitRelationships;
    use FoodUnitScopes;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'food_units';

    protected $fillable = [
        'name',
    ];

    protected static function newFactory()
    {
        return FoodUnitFactory::new();
    }
}
