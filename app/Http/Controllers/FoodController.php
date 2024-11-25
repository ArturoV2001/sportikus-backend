<?php

namespace App\Http\Controllers;

use App\Http\Requests\FoodRequest;
use App\Models\Food\Food;
use App\Repositories\FoodRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class FoodController extends Controller
{
    protected FoodRepository $repository;

    public function __construct(FoodRepository $repository)
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
    public function store(FoodRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createFood($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($food->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodRequest $request, Food $food): JsonResponse
    {
        return response()->json(
            $this->repository->updateFood($request->validated(), $food)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food): JsonResponse
    {
        $food->delete();

        return response()->json(
            [], 204
        );
    }
}
