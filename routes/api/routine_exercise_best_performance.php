<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutineExerciseBestPerformanceController;

Route::get('routine-exercises-best-performance', [RoutineExerciseBestPerformanceController::class, 'index'])->name('routine-exercises-best-performance.index');
Route::post('routine-exercises-best-performance', [RoutineExerciseBestPerformanceController::class, 'store'])->name('routine-exercises-best-performance.store');
Route::get('routine-exercises-best-performance/{routine_exercise_best_performance}', [RoutineExerciseBestPerformanceController::class, 'show'])->name('routine-exercises-best-performance.show');
Route::put('routine-exercises-best-performance/{routine_exercise_best_performance}', [RoutineExerciseBestPerformanceController::class, 'update'])->name('routine-exercises-best-performance.update');
Route::delete('routine-exercises-best-performance/{routine_exercise_best_performance}', [RoutineExerciseBestPerformanceController::class, 'destroy'])->name('routine-exercises-best-performance.destroy');
