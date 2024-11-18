<?php

use App\Http\Controllers\RoutineExerciseBestPerformanceController;
use Illuminate\Support\Facades\Route;

Route::get('exercises-best-performance', [RoutineExerciseBestPerformanceController::class, 'index'])->name('exercises-best-performance.index');
Route::post('exercises-best-performance', [RoutineExerciseBestPerformanceController::class, 'store'])->name('exercises-best-performance.store');
Route::get('exercises-best-performance/{exercise_best_performance}', [RoutineExerciseBestPerformanceController::class, 'show'])->name('exercises-best-performance.show');
Route::put('exercises-best-performance/{exercise_best_performance}', [RoutineExerciseBestPerformanceController::class, 'update'])->name('exercises-best-performance.update');
Route::delete('exercises-best-performance/{exercise_best_performance}', [RoutineExerciseBestPerformanceController::class, 'destroy'])->name('exercises-best-performance.destroy');
