<?php

namespace App\Models\Routine;

use App\Models\Ailment\Ailment;
use Illuminate\Database\Eloquent\Builder;

trait RoutineScopes
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

    public function scopeWithAliasAilmentName(Builder $query): void
    {
        $query->addSelect([
            'ailment_name' => Ailment::query()->select('name')
                ->whereColumn('routines.ailment_id', 'ailments.id'),
        ]);
    }
}
