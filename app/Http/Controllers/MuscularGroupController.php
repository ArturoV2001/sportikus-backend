<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuscularGroupRequest;
use App\Models\MuscularGroup\MuscularGroup;
use App\Repositories\MuscularGroupRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class MuscularGroupController extends Controller
{
    protected MuscularGroupRepository $repository;

    public function __construct(MuscularGroupRepository $repository)
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
    public function store(MuscularGroupRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createMuscularGroup($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(MuscularGroup $muscularGroup): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($muscularGroup->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MuscularGroupRequest $request, MuscularGroup $muscularGroup): JsonResponse
    {
        return response()->json(
            $this->repository->updateMuscularGroup($request->validated(), $muscularGroup)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MuscularGroup $muscularGroup): JsonResponse
    {
        $muscularGroup->delete();

        return response()->json(
            [], 204
        );
    }
}
