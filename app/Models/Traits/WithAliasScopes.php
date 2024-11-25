<?php

namespace App\Models\Traits;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait WithAliasScopes
{
    public function loadAliasScopes($columns)
    {
        $model = $this->query()->withAliasScopes($columns)->where($this->getKeyName(), $this->getKey())->first();
        $this->forceFill($model->toArray());
    }

    public function unsetAliasScopes()
    {
        $alias_scopes = array_filter(get_class_methods($this), function ($method) {
            return str_contains($method, 'scopeWithAlias') && $method != 'scopeWithAliasScopes';
        });
        $alias_scopes = array_map(function ($method) {
            return Str::snake(str_replace('scopeWithAlias', '', $method));
        }, $alias_scopes);
        foreach ($alias_scopes as $alias_scope) {
            unset($this[$alias_scope]);
        }
    }

    public function scopeWithAliasScopes(Builder $query, $columns)
    {
        $alias_scopes = array_map(fn ($column) => $this->columnToAliasScope($column), $columns);
        $alias_scopes = array_filter($alias_scopes, fn ($scope) => method_exists($this, 'scope' . $scope));
        foreach ($alias_scopes as $scope) {
            $query->$scope();
        }
    }

    public function hasAliasScope($column)
    {
        $scope = $this->columnToAliasScope($column);

        return method_exists($this, 'scope' . $scope);
    }

    private function columnToAliasScope($column)
    {
        return 'WithAlias' . Str::ucfirst(Str::camel($column));
    }
}
