<?php

namespace App\Models\MealFood;

use Database\Factories\MealFoodFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MealFood extends Model
{
    use HasFactory;
    use MealFoodRelationships;
    use MealFoodScopes;
    use SoftDeletes;

    protected $table = 'meal_foods';

    protected $fillable = [
        'meal_id',
        'food_id',
        'quantity',
        'calories',
    ];

    protected static function newFactory()
    {
        return MealFoodFactory::new();
    }
}
