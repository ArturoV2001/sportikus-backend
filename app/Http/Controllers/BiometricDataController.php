<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiometricDataRequest;
use App\Models\BiometricData\BiometricData;
use App\Repositories\BiometricDataRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class BiometricDataController extends Controller
{
    protected BiometricDataRepository $repository;

    public function __construct(BiometricDataRepository $repository)
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
    public function store(BiometricDataRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createBiometricData($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(BiometricData $biometricData): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($biometricData->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BiometricDataRequest $request, BiometricData $biometricData): JsonResponse
    {
        return response()->json(
            $this->repository->updateBiometricData($request->validated(), $biometricData)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BiometricData $biometricData): JsonResponse
    {
        $biometricData->delete();

        return response()->json(
            [], 204
        );
    }
}
