<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;

Route::get('foods', [ExerciseController::class, 'index'])->name('foods.index');
Route::post('foods', [ExerciseController::class, 'store'])->name('foods.store');
Route::get('foods/{food}', [ExerciseController::class, 'show'])->name('foods.show');
Route::put('foods/{food}', [ExerciseController::class, 'update'])->name('foods.update');
Route::delete('foods/{food}', [ExerciseController::class, 'destroy'])->name('foods.destroy');
