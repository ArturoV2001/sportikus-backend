<?php

namespace App\Models\Meal;

use App\Models\Traits\WithAliasScopes;
use Database\Factories\MealFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meal extends Model
{
    use HasFactory;
    use MealRelationships;
    use MealScopes;
    use SoftDeletes;
    use WithAliasScopes;

    protected $table = 'meals';

    protected $fillable = [
        'user_id',
        'total_calories',
    ];

    protected static function newFactory()
    {
        return MealFactory::new();
    }
}
