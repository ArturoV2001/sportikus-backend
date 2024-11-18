<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User\User;
use App\Repositories\UserRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    protected UserRepository $repository;

    public function __construct(UserRepository $repository)
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
    public function store(UserRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createUser($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($user->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user): JsonResponse
    {
        return response()->json(
            $this->repository->updateUser($request->validated(), $user)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json(
            [], 204
        );
    }
}
