<?php

namespace App\Models\AilmentUser;

use App\Models\Ailment\Ailment;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Builder;

trait AilmentUserScopes
{
    public function scopeFilterByColumn(Builder $query, string $column, mixed $value): void
    {
        switch ($column) {
            default:
                if ($this->hasAliasScope($column)) {
                    $query->having($column, 'LIKE', $value);
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

    public function scopeWithAliasUserName(Builder $query): void
    {
        $query->addSelect([
            'user_name' => User::query()->selectRaw("CONCAT(name,' ',last_name)")
                ->whereColumn('ailment_user.user_id', 'users.id'),
        ]);
    }

    public function scopeWithAliasAilmentName(Builder $query): void
    {
        $query->addSelect([
            'ailment_name' => Ailment::query()->selectRaw('name')
                ->whereColumn('ailment_user.ailment_id', 'ailments.id'),
        ]);
    }
}
