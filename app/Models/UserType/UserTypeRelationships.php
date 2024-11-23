<?php

namespace App\Models\UserType;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserTypeRelationships
{
    public function user():HasMany
    {
        return $this->hasMany(User::class);
    }
}
