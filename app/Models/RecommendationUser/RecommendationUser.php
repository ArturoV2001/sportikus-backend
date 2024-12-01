<?php

namespace App\Models\RecommendationUser;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecommendationUser extends Model
{
    use RecommendationUserScopes;
    use SoftDeletes;

    protected $table = 'recommendation_users';

    protected $fillable = [
        'user_id',
    ];

}
