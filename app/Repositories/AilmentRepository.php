<?php

namespace App\Repositories;

use App\Models\Ailment\Ailment;
use Illuminate\Database\Eloquent\Model;

class AilmentRepository extends IndexRepository
{
    public Model $model;

    public function __construct(Ailment $ailment)
    {
        $this->model = $ailment;
    }

    public function createAilment(array $data): Ailment
    {
        return Ailment::query()->create($data);
    }

    public function updateAilment(array $data, Ailment $ailment ): Ailment
    {
        $ailment->update($data);
        return $ailment;
    }
}

