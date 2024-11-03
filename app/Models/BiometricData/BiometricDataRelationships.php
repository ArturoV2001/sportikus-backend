<?php

namespace App\Models\BiometricData;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BiometricDataRelationships
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
