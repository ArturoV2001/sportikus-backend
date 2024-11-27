<?php

namespace App\Models\Muscle;

use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Eloquent\Builder;

trait MuscleScopes
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

    public function withAliasScopeMuscularGroupName(Builder $query): void
    {
        $query->addSelect([
            'muscular_group_name' => MuscularGroup::select('muscular_group_name')
                ->whereColumn('muscle.muscular_group_id', 'muscular_groups.id'),
        ]);
    }
}
