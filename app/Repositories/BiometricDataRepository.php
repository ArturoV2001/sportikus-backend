<?php

namespace App\Repositories;

use App\Http\Requests\BiometricDataRequest;
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

    public function updateBiometricData(array $data, BiometricData $biometricData): BiometricData
    {
        $biometricData->update($data);

        return $biometricData;
    }

    public function getRecommendationIdentifiers(BiometricDataRequest $biometricData): array
    {
        $recommendations = [];
        // 1. Frecuencia cardíaca
        if ($biometricData->heart_frequency) {
            if ($biometricData->heart_frequency < 50) {
                $recommendations[] = 1;
            } elseif ($biometricData->heart_frequency >= 50 && $biometricData->heart_frequency < 60) {
                $recommendations[] = 2;
            } elseif ($biometricData->heart_frequency >= 60 && $biometricData->heart_frequency <= 85) {
                $recommendations[] = 3;
            } elseif ($biometricData->heart_frequency > 85 && $biometricData->heart_frequency <= 100) {
                $recommendations[] = 4;
            } else {
                $recommendations[] = 5;
            }
        }

        // 2. Pasos diarios
        if ($biometricData->steps) {
            if ($biometricData->steps < 3000) {
                $recommendations[] = 6;
            } elseif ($biometricData->steps >= 3000 && $biometricData->steps < 7000) {
                $recommendations[] = 7;
            } elseif ($biometricData->steps >= 7000 && $biometricData->steps <= 10000) {
                $recommendations[] = 8;
            } else {
                $recommendations[] = 9;
            }
        }

        // 3. Distancia recorrida
        if ($biometricData->distance) {
            if ($biometricData->distance < 3) {
                $recommendations[] = 10;
            } elseif ($biometricData->distance >= 3 && $biometricData->distance < 8) {
                $recommendations[] = 11;
            } elseif ($biometricData->distance >= 8 && $biometricData->distance <= 12) {
                $recommendations[] = 12;
            } else {
                $recommendations[] = 13;
            }
        }

        // 4. Saturación de oxígeno
        if ($biometricData->oxygenation) {
            if ($biometricData->oxygenation < 90) {
                $recommendations[] = 14;
            } elseif ($biometricData->oxygenation >= 90 && $biometricData->oxygenation < 95) {
                $recommendations[] = 15;
            } elseif ($biometricData->oxygenation >= 95 && $biometricData->oxygenation <= 99) {
                $recommendations[] = 16;
            } else {
                $recommendations[] = 17;
            }
        }

        // 5. Sueño
        if ($biometricData->sleep_quantity) {
            if ($biometricData->sleep_quantity < 360) {
                $recommendations[] = 18;
            } elseif ($biometricData->sleep_quantity >= 360 && $biometricData->sleep_quantity < 420) {
                $recommendations[] = 19;
            } elseif ($biometricData->sleep_quantity >= 420 && $biometricData->sleep_quantity <= 540) {
                $recommendations[] = 20;
            } else {
                $recommendations[] = 21;
            }
        }

        // 6. Sueño profundo y REM
        if ($biometricData->sleep_quality_deep) {
            if ($biometricData->sleep_quality_deep < 60) {
                $recommendations[] = 22;
            } elseif ($biometricData->sleep_quality_deep >= 60 && $biometricData->sleep_quality_deep < 120) {
                $recommendations[] = 23;
            } else {
                $recommendations[] = 24;
            }
        }

        // 7. Calidad del sueño despierto
        if ($biometricData->sleep_quality_awake) {
            if ($biometricData->sleep_quality_awake > 30) {
                $recommendations[] = 25;
            } else {
                $recommendations[] = 26;
            }
        }

        // 8.
        if ($biometricData->sleep_quality_rem) {
            if ($biometricData->sleep_quality_rem < 90) {
                $recommendations[] = 27;
            } elseif ($biometricData->sleep_quality_rem >= 90 && $biometricData->sleep_quality_rem < 150) {
                $recommendations[] = 28;
            } else {
                $recommendations[] = 29;
            }
        }

        // Recomendación si todos los signos están estables
        if (empty($recommendations)) {
            $recommendations[] = 30;
        }

        return $recommendations;
    }
}
