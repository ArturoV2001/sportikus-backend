<?php

namespace App\Models\BiometricData;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Builder;

trait BiometricDataScopes
{
    public function scopeFilterByColumn(Builder $query, string $column, mixed $value): void
    {
        switch ($column) {
            case 'user_id':
                $query->where('user_id', '=', $value);
                break;
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
            'user_name' => User::query()->selectRaw("CONCAT(name,' ',last_name)")
                ->whereColumn('biometric_data.user_id', 'users.id'),
        ]);
    }
}
