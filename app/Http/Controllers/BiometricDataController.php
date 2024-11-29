<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiometricDataRequest;
use App\Models\BiometricData\BiometricData;
use App\Models\Recommendation\Recommendation;
use App\Models\RecommendationUser\RecommendationUser;
use App\Models\RecommendationUserRecommendation\RecommendationUserRecommendation;
use App\Repositories\BiometricDataRepository;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BiometricDataController extends Controller
{
    protected BiometricDataRepository $repository;

    public function __construct(BiometricDataRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $first = request('first', false);
        $rows = request('rows', false);
        $orderBy = request('sortField', 'created_at');
        $sortOrder = request('sortOrder', '1');
        $filters = json_decode(request('filters', '{}'), true);
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id'];

        return response()->json(
            $this->repository->index($first, $rows, $orderBy, $sortOrder, $filters, $columns)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiometricDataRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createBiometricData($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(BiometricData $biometricData): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($biometricData->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BiometricDataRequest $request, BiometricData $biometricData): JsonResponse
    {
        return response()->json(
            $this->repository->updateBiometricData($request->validated(), $biometricData)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiometricData $biometricData): JsonResponse
    {
        $biometricData->delete();

        return response()->json(
            [], 204
        );
    }

    /**
     * Generate the recommendation based on the biometric data obtained.
     */
    public function generateRecommendation(BiometricDataRequest $biometricData): JsonResponse
    {
        if (!RecommendationUser::query()->whereDate('created_at', Carbon::today())->exists()) {
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

            $biometricData['user_id'] = auth()->id();

            $biometricDataCreated = BiometricData::query()->create($biometricData->toArray());

            $recommendationUser = RecommendationUser::query()->create([
                'user_id' => auth()->id(),
            ]);
            $result = "";
            $allRecommendations = Recommendation::query()->whereIn('id', $recommendations)->get()->keyBy('id');
            foreach ($recommendations as $recommendation) {
                RecommendationUserRecommendation::query()->insert([
                    'recommendation_id' => $recommendation,
                    'recommendation_user_id' => $recommendationUser->id,
                ]);
                $result .= $allRecommendations[$recommendation]->recommendation . "\n";
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'recommendation' => $result,
                ],
            ], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json([
                'success' => false,
                'data' => [
                    'recommendation' => 'Ya has recibido la recomendación de hoy',
                ],
            ], 200, [], JSON_UNESCAPED_UNICODE);
        }

    }
}
