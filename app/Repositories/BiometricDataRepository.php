<?php

namespace App\Repositories;

use App\Models\BiometricData\BiometricData;
use Illuminate\Database\Eloquent\Model;

class BiometricDataRepository extends IndexRepository
{
    public Model $model;

    public function __construct(BiometricData $biometricData)
    {
        $this->model = $biometricData;
    }

    public function createBiometricData(array $data): BiometricData
    {
        return BiometricData::query()->create($data);
    }

    public function updateBiometricData(array $data, BiometricData $biometricData ): BiometricData
    {
        $biometricData->update($data);
        return $biometricData;
    }
}
