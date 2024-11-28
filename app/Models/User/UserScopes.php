<?php

namespace App\Models\User;

use App\Models\Gender\Gender;
use App\Models\UserType\UserType;
use Illuminate\Database\Eloquent\Builder;

trait UserScopes
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

    public function scopeWithAliasUserName(Builder $query): void
    {
        $query->addSelect([
            'user_name' => UserType::query()->select('name')
                ->whereColumn('users.user_type_id', 'user_types.id'),
        ]);
    }

    public function scopeWithAliasGender(Builder $query): void
    {
        $query->addSelect([
            'gender' => Gender::query()->select('name')
                ->whereColumn('users.gender_id', 'genders.id'),
        ]);
    }
}
