<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuscleRequest;
use App\Models\Muscle\Muscle;
use App\Repositories\MuscleRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class MuscleController extends Controller
{
    protected MuscleRepository $repository;

    public function __construct(MuscleRepository $repository)
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
    public function store(MuscleRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createMuscle($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Muscle $muscle): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($muscle->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MuscleRequest $request, Muscle $muscle): JsonResponse
    {
        return response()->json(
            $this->repository->updateMuscle($request->validated(), $muscle)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Muscle $muscle): JsonResponse
    {
        $muscle->delete();

        return response()->json(
            [], 204
        );
    }
}
