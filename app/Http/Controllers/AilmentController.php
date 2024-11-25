<?php

namespace App\Http\Controllers;

use App\Http\Requests\AilmentRequest;
use App\Models\Ailment\Ailment;
use App\Repositories\AilmentRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class AilmentController extends Controller
{
    protected AilmentRepository $repository;

    public function __construct(AilmentRepository $repository)
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
        $columns = request()->has('columns') ? json_decode(request('columns')) : array_keys($filters);

        return response()->json(
            $this->repository->index($first, $rows, $orderBy, $sortOrder, $filters, $columns)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AilmentRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createAilment($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Ailment $ailment): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($ailment->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AilmentRequest $request, Ailment $ailment): JsonResponse
    {
        return response()->json(
            $this->repository->updateAilment($request->validated(), $ailment)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ailment $ailment): JsonResponse
    {
        $ailment->delete();

        return response()->json(
            [], 204
        );
    }
}
