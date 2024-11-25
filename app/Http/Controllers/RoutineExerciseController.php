<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoutineExerciseRequest;
use App\Models\RoutineExercise\RoutineExercise;
use App\Repositories\RoutineExerciseRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class RoutineExerciseController extends Controller
{
    protected RoutineExerciseRepository $repository;

    public function __construct(RoutineExerciseRepository $repository)
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
        $orderBy = request('sortField', 'id');
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
    public function store(RoutineExerciseRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createRoutineExercise($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(RoutineExercise $routineExercise): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($routineExercise->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoutineExerciseRequest $request, RoutineExercise $routineExercise): JsonResponse
    {
        return response()->json(
            $this->repository->updateRoutineExercise($request->validated(), $routineExercise)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoutineExercise $routineExercise): JsonResponse
    {
        $routineExercise->delete();

        return response()->json(
            [], 204
        );
    }
}
