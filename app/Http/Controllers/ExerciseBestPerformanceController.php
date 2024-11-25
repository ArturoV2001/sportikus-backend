<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExerciseBestPerformanceRequest;
use App\Models\ExerciseBestPerformance\ExerciseBestPerformance;
use App\Repositories\ExerciseBestPerformanceRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ExerciseBestPerformanceController extends Controller
{
    protected ExerciseBestPerformanceRepository $repository;

    public function __construct(ExerciseBestPerformanceRepository $repository)
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
    public function store(ExerciseBestPerformanceRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createExerciseBestPerformance($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(ExerciseBestPerformance $exerciseBestPerformance): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($exerciseBestPerformance->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExerciseBestPerformanceRequest $request, ExerciseBestPerformance $exerciseBestPerformance): JsonResponse
    {
        return response()->json(
            $this->repository->updateExerciseBestPerformance($request->validated(), $exerciseBestPerformance)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExerciseBestPerformance $exerciseBestPerformance): JsonResponse
    {
        $exerciseBestPerformance->delete();

        return response()->json(
            [], 204
        );
    }
}
