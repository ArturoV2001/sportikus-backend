<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutineExerciseController;

Route::get('routine-exercises', [RoutineExerciseController::class, 'index'])->name('routine-exercises.index');
Route::post('routine-exercises', [RoutineExerciseController::class, 'store'])->name('routine-exercises.store');
Route::get('routine-exercises/{routine_exercise}', [RoutineExerciseController::class, 'show'])->name('routine-exercises.show');
Route::put('routine-exercises/{routine_exercise}', [RoutineExerciseController::class, 'update'])->name('routine-exercises.update');
Route::delete('routine-exercises/{routine_exercise}', [RoutineExerciseController::class, 'destroy'])->name('routines.destroy');
