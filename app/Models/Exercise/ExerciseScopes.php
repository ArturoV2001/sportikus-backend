<?php

namespace App\Models\Exercise;

use App\Models\Muscle\Muscle;
use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Eloquent\Builder;

trait ExerciseScopes
{
    public function scopeFilterByColumn(Builder $query, string $column, mixed $value): void
    {
        switch ($column) {
            default:
                if ($this->hasGetMutator($column)) {
                    return;
                }
                $query->where($column, 'like', '%' . trim($value, '%') . '%');
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

    public function scopeWithAliasMuscleName(Builder $query): void
    {
        $query->addSelect([
            'muscle_name' => Muscle::query()->select('name')
                ->whereColumn('exercises.muscle_id', '=', 'muscles.id'),
        ]);
    }

    public function scopeWithAliasMuscularGroupName(Builder $query): void
    {
        $query->addSelect([
            'muscular_group_name' => MuscularGroup::query()->select('name')
                ->whereColumn('exercises.muscular_group_id', '=', 'muscular_groups.id'),
        ]);
    }
}
