<?php

namespace App\Models\Routine;

use App\Models\RoutineExercise\RoutineExercise;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RoutineRelationships
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function routineExercise():HasMany
    {
        return $this->hasMany(RoutineExercise::class);
    }
}
