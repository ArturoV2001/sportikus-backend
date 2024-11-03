<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodUnitController;

Route::get('food-units', [FoodUnitController::class, 'index'])->name('food-units.index');
Route::post('food-units', [FoodUnitController::class, 'store'])->name('food-units.store');
Route::get('food-units/{food_unit}', [FoodUnitController::class, 'show'])->name('food-units.show');
Route::put('food-units/{food_unit}', [FoodUnitController::class, 'update'])->name('food-units.update');
Route::delete('food-units/{food_unit}', [FoodUnitController::class, 'destroy'])->name('food-units.destroy');
