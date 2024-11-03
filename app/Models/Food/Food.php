<?php

namespace App\Models\Food;

use Database\Factories\FoodFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use FoodScopes;
    use FoodRelationships;
    use HasFactory;
    use SoftDeletes;

    protected $table = 'foods';

    protected $fillable = [
        'name',
        'image',
        'calories_per_unit',
        'category_id',
        'food_unit_id',
        'quality',
        'protein',
        'fat',
        'carbohidrate',
        'step',
    ];

    protected static function newFactory()
    {
        return FoodFactory::new();
    }
}
