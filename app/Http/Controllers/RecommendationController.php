<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecommendationRequest;
use App\Models\Recommendation\Recommendation;
use App\Repositories\RecommendationRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RecommendationController extends Controller
{
    protected RecommendationRepository $repository;

    public function __construct(RecommendationRepository $repository)
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
        $ascending = request('sortOrder', 1);
        $filters = json_decode(request('filters', '{}'), true);
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id'];

        return response()->json(
            $this->repository->index($first, $rows, $orderBy, $ascending, $filters, $columns)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecommendationRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createRecommendation($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Recommendation $recommendation): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($recommendation->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecommendationRequest $request, Recommendation $recommendation): JsonResponse
    {
        return response()->json(
            $this->repository->updateRecommendation($request->validated(), $recommendation)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recommendation $recommendation): JsonResponse
    {
        $recommendation->delete();

        return response()->json(
            [], 204
        );
    }
}
