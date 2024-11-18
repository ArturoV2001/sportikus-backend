<?php

namespace App\Models\AilmentUser;

use App\Models\Ailment\Ailment;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait AilmentUserRelationships
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function aliment(): BelongsTo
    {
        return $this->belongsTo(Ailment::class);
    }
}
