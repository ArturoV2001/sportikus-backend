<?php

namespace App\Models\Routine;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Builder;

trait RoutineScopes
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

    public function scopeWithAliasUserName(Builder $query): void
    {
        $query->addSelect([
            'user_name' => User::query()->selectRaw("CONCAT(name,' ',last_name)")
                ->whereColumn('routines.user_id', 'users.id'),
        ]);
    }
}
