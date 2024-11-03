<?php

namespace App\Repositories;

use App\Models\MuscularGroup\MuscularGroup;
use Illuminate\Database\Eloquent\Model;

class MuscularGroupRepository extends IndexRepository
{
    public Model $model;

    public function __construct(MuscularGroup $muscularGroup)
    {
        $this->model = $muscularGroup;
    }

    public function createMuscularGroup(array $data): MuscularGroup
    {
        return MuscularGroup::query()->create($data);
    }

    public function updateMuscularGroup(array $data, MuscularGroup $muscularGroup ): MuscularGroup
    {
        $muscularGroup->update($data);
        return $muscularGroup;
    }
}
