<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;

Route::get('meals', [MealController::class, 'index'])->name('meals.index');
Route::post('meals', [MealController::class, 'store'])->name('meals.store');
Route::get('meals/{meal}', [MealController::class, 'show'])->name('meals.show');
Route::put('meals/{meal}', [MealController::class, 'update'])->name('meals.update');
Route::delete('meals/{meal}', [MealController::class, 'destroy'])->name('meals.destroy');
