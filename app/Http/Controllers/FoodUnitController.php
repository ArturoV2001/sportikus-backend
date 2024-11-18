<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodUnitRequest;
use App\Models\FoodUnit\FoodUnit;
use App\Repositories\FoodUnitRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FoodUnitController extends Controller
{
    protected FoodUnitRepository $repository;

    public function __construct(FoodUnitRepository $repository)
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
        $orderBy = request('sortField', 'name');
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
    public function store(FoodUnitRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createFoodUnit($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(FoodUnit $foodUnit): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($foodUnit->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodUnitRequest $request, FoodUnit $foodUnit): JsonResponse
    {
        return response()->json(
            $this->repository->updateFoodUnit($request->validated(), $foodUnit)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodUnit $foodUnit): JsonResponse
    {
        $foodUnit->delete();

        return response()->json(
            [], 204
        );
    }
}
