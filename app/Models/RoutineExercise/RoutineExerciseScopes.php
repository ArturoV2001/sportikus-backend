<?php

namespace App\Models\RoutineExercise;

use App\Models\Exercise\Exercise;
use Illuminate\Database\Eloquent\Builder;

trait RoutineExerciseScopes
{
    public function scopeFilterByColumn(Builder $query, string $column, mixed $value): void
    {
        switch ($column) {
            default:
                if ($this->hasAliasScope($column)) {
                    $query->having($column, 'LIKE', $value);

                    return;
                }
                if ($this->hasGetMutator($column)) {
                    return;
                }
                $query->where($column, '=', $value);
                break;
        }
    }

    public function scopeOrderByColumn(Builder $query, string $orderBy, string $order): void
    {
        switch ($orderBy) {
            default:
                if ($this->hasGetMutator($orderBy)) {
                    return;
                }
                $query->orderBy($orderBy, $order);
                break;
        }
    }

    public function scopeWithAliasExerciseName(Builder $query): void
    {
        $query->addSelect([
            'exercise_name' => Exercise::query()->select('name')
                ->whereColumn('routine_exercises.exercise_id', 'exercises.id'),
        ]);
    }
}
