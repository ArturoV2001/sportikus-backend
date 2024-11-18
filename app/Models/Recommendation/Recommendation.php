<?php

namespace App\Models\Recommendation;

use Database\Factories\RecommendationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recommendation extends Model
{
    use HasFactory;
    use RecommendationRelationships;
    use RecommendationScopes;
    use SoftDeletes;

    protected $table = 'recommendations';

    protected $fillable = [
        'user_id',
        'recommendation',
    ];

    protected static function newFactory()
    {
        return RecommendationFactory::new();
    }
}
