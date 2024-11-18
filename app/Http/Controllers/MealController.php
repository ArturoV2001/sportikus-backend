<?php

namespace App\Http\Controllers;

use App\Http\Requests\MealRequest;
use App\Models\Meal\Meal;
use App\Repositories\MealRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class MealController extends Controller
{
    protected MealRepository $repository;

    public function __construct(MealRepository $repository)
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
    public function store(MealRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createMeal($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($meal->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MealRequest $request, Meal $meal): JsonResponse
    {
        return response()->json(
            $this->repository->updateMeal($request->validated(), $meal)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal): JsonResponse
    {
        $meal->delete();

        return response()->json(
            [], 204
        );
    }
}
