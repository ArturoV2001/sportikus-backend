<?php

namespace App\Http\Controllers;

use App\Models\Recommendation\Recommendation;
use App\Models\RecommendationUser\RecommendationUser;
use App\Models\RecommendationUserRecommendation\RecommendationUserRecommendation;
use App\Repositories\RecommendationUserRepository;
use Illuminate\Http\JsonResponse;

class RecommendationUserController extends Controller
{
    protected RecommendationUserRepository $repository;

    public function __construct(RecommendationUserRepository $repository)
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

    public function showRecommendation(): JsonResponse
    {
        $recommendationUserId = request('recommendation_user_id');
        if (RecommendationUser::query()->where('id', $recommendationUserId)->exists()) {
            $ids = RecommendationUserRecommendation::query()
                ->where('recommendation_user_id', $recommendationUserId)
                ->pluck('recommendation_id')
                ->toArray();
            $recommendation = '';
            //return response()->json($ids);
            $recommendations = Recommendation::query()
                ->select('id', 'recommendation')
                ->whereIn('id', $ids)
                ->get()
                ->keyBy('id');
            foreach ($ids as $id) {
                if (isset($recommendations[$id])) {
                    $recommendation .= $recommendations[$id]->recommendation . "\n";
                }
            }

            return response()->json([
                'recommendation' => nl2br($recommendation), // Elimina el salto de línea al final
            ]);
        } else {
            return response()->json([
                'recommendation' => 'Recomendación no encontrada.',
            ]);
        }
    }
}
