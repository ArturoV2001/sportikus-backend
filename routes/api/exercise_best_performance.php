<?php

use App\Http\Controllers\ExerciseBestPerformanceController;
use Illuminate\Support\Facades\Route;

Route::get('exercises-best-performance', [ExerciseBestPerformanceController::class, 'index'])->name('exercises-best-performance.index');
Route::post('exercises-best-performance', [ExerciseBestPerformanceController::class, 'store'])->name('exercises-best-performance.store');
Route::get('exercises-best-performance/{exercise_best_performance}', [ExerciseBestPerformanceController::class, 'show'])->name('exercises-best-performance.show');
Route::put('exercises-best-performance/{exercise_best_performance}', [ExerciseBestPerformanceController::class, 'update'])->name('exercises-best-performance.update');
Route::delete('exercises-best-performance/{exercise_best_performance}', [ExerciseBestPerformanceController::class, 'destroy'])->name('exercises-best-performance.destroy');
