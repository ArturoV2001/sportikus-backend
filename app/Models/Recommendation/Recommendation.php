<?php

namespace App\Models\Recommendation;

use App\Models\Traits\WithAliasScopes;
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
    use WithAliasScopes;

    protected $table = 'recommendations';

    protected $fillable = [
        'recommendation',
    ];

    protected static function newFactory()
    {
        return RecommendationFactory::new();
    }
}
