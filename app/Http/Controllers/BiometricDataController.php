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
use Illuminate\Support\Facades\Auth;
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
        $sortOrder = request('sortOrder', '0');
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
        if (! RecommendationUser::query()->whereDate('created_at', Carbon::today())->where('user_id', auth()->id())->exists() || Auth::user()->user_type_id == 1) {
            $recommendations = $this->repository->getRecommendationIdentifiers($biometricData);
            $biometricData['user_id'] = auth()->id();
            BiometricData::query()->create($biometricData->toArray());
            $recommendationUser = RecommendationUser::query()->create([
                'user_id' => auth()->id(),
            ]);
            $result = '';
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
                    'recommendation' => nl2br($result),
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
