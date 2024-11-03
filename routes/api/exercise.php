<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::get('exercises', [ExerciseController::class, 'index'])->name('exercises.index');
Route::post('exercises', [ExerciseController::class, 'store'])->name('exercises.store');
Route::get('exercises/{exercise}', [ExerciseController::class, 'show'])->name('exercises.show');
Route::put('exercises/{exercise}', [ExerciseController::class, 'update'])->name('exercises.update');
Route::delete('exercises/{exercise}', [ExerciseController::class, 'destroy'])->name('exercises.destroy');
