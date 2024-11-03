<?php

namespace App\Models\Recommendation;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait RecommendationRelationships
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
