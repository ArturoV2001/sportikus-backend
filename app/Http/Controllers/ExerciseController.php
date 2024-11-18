<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExerciseRequest;
use App\Models\Exercise\Exercise;
use App\Repositories\ExerciseRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ExerciseController extends Controller
{
    protected ExerciseRepository $repository;

    public function __construct(ExerciseRepository $repository)
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
    public function store(ExerciseRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createExercise($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($exercise->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExerciseRequest $request, Exercise $exercise): JsonResponse
    {
        return response()->json(
            $this->repository->updateExercise($request->validated(), $exercise)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise): JsonResponse
    {
        $exercise->delete();

        return response()->json(
            [], 204
        );
    }
}
