<?php

namespace App\Models\Food;

use App\Models\Traits\WithAliasScopes;
use Database\Factories\FoodFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    use FoodRelationships;
    use FoodScopes;
    use HasFactory;
    use SoftDeletes;
    use WithAliasScopes;

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
