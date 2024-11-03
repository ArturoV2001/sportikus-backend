<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealFoodController;

Route::get('meal-foods', [MealFoodController::class, 'index'])->name('meal-foods.index');
Route::post('meal-foods', [MealFoodController::class, 'store'])->name('meal-foods.store');
Route::get('meal-foods/{meal_food}', [MealFoodController::class, 'show'])->name('meal-foods.show');
Route::put('meal-foods/{meal_food}', [MealFoodController::class, 'update'])->name('meal-foods.update');
Route::delete('meal-foods/{meal_food}', [MealFoodController::class, 'destroy'])->name('meal-foods.destroy');
