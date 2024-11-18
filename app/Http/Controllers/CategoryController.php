<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    protected CategoryRepository $repository;

    public function __construct(CategoryRepository $repository)
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
    public function store(CategoryRequest $request): JsonResponse
    {
        return response()->json(
            $this->repository->createCategory($request->validated()),
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): JsonResponse
    {
        $columns = request()->has('columns') ? json_decode(request('columns')) : ['id', 'email'];

        return response()->json($category->only($columns));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): JsonResponse
    {
        return response()->json(
            $this->repository->updateCategory($request->validated(), $category)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();

        return response()->json(
            [], 204
        );
    }
}
