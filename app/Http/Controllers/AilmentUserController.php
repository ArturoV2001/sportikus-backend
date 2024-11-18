<?php

namespace App\Http\Controllers;

use App\Http\Requests\AilmentUserRequest;
use App\Models\AilmentUser\AilmentUser;
use App\Repositories\AilmentUserRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AilmentUserController extends Controller
{
    protected AilmentUserRepository $repository;

    public function __construct(AilmentUserRepository $repository)
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
    public function store(AilmentUserRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createAilmentUser($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(AilmentUser $ailmentUser): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($ailmentUser->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AilmentUserRequest $request, AilmentUser $ailmentUser): JsonResponse
    {
        return response()->json(
            $this->repository->updateAilmentUser($request->validated(), $ailmentUser)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AilmentUser $ailmentUser): JsonResponse
    {
        $ailmentUser->delete();

        return response()->json(
            [], 204
        );
    }
}
