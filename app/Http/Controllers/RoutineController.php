<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoutineRequest;
use App\Models\Routine\Routine;
use App\Repositories\RoutineRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RoutineController extends Controller
{
    protected RoutineRepository $repository;

    public function __construct(RoutineRepository $repository)
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
    public function store(RoutineRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createRoutine($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Routine $routine): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($routine->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoutineRequest $request, Routine $routine): JsonResponse
    {
        return response()->json(
            $this->repository->updateRoutine($request->validated(), $routine)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Routine $routine): JsonResponse
    {
        $routine->delete();

        return response()->json(
            [], 204
        );
    }
}
