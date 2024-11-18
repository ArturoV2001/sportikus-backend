<?php

namespace App\Http\Controllers;

use App\Http\Requests\MealFoodRequest;
use App\Models\MealFood\MealFood;
use App\Repositories\MealFoodRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class MealFoodController extends Controller
{
    protected MealFoodRepository $repository;

    public function __construct(MealFoodRepository $repository)
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
    public function store(MealFoodRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createMealFood($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(MealFood $mealFood): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($mealFood->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MealFoodRequest $request, MealFood $mealFood): JsonResponse
    {
        return response()->json(
            $this->repository->updateMealFood($request->validated(), $mealFood)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MealFood $mealFood): JsonResponse
    {
        $mealFood->delete();

        return response()->json(
            [], 204
        );
    }
}
