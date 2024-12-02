<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoutineRequest;
use App\Models\Routine\Routine;
use App\Repositories\RoutineRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
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

    public function assignRoutine(): JsonResponse
    {
        $frequency = request('frequency');
        $ailment_id = request('ailment_id');
        if (! $frequency || ! is_numeric($frequency) || (! $ailment_id && $ailment_id !== null)) {
            return response()->json([
                'success' => false,
                'message' => 'Parámetros inválidos.',
            ]);
        }
        $user = Auth::user();
        if ($user->routine_id !== null) {
            return response()->json([
                'success' => false,
                'message' => 'El usuario ya tiene una rutina asignada.',
            ]);
        }
        $routine = Routine::query()->where([
            'frequency' => $frequency,
            'ailment_id' => $ailment_id,
        ])->first();
        if (! $routine) {
            return response()->json([
                'success' => false,
                'message' => 'No se encontró una rutina que coincida con los criterios.',
            ]);
        }
        $user->routine_id = $routine->id;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Rutina asignada correctamente.',
        ]);
    }

    public function getRoutineExercises(): JsonResponse
    {
        $routine_id = request('routine_id');
        $routine = Routine::query()->find($routine_id);
        $routine_exercises = Routine::query()->where('routine_id', $routine_id)->get();

        return response()->json([
            'routine' => $routine,
            'routine_exercises' => $routine_exercises,
        ]);
    }
}
