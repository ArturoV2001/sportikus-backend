<?php

namespace App\Models\RecommendationUserRecommendation;

use Illuminate\Database\Eloquent\Model;

class RecommendationUserRecommendation extends Model
{
    protected $table = 'recommendation_user_recommendations';

    protected $fillable = [
        'recommendation_id',
        'recommendation_user_id',
    ];
}
