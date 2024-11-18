<?php

use App\Http\Controllers\RecommendationController;
use Illuminate\Support\Facades\Route;

Route::get('recommendation', [RecommendationController::class, 'index'])->name('recommendation.index');
Route::post('recommendation', [RecommendationController::class, 'store'])->name('recommendation.store');
Route::get('recommendation/{recommendation}', [RecommendationController::class, 'show'])->name('recommendation.show');
Route::put('recommendation/{recommendation}', [RecommendationController::class, 'update'])->name('recommendation.update');
Route::delete('recommendation/{recommendation}', [RecommendationController::class, 'destroy'])->name('recommendation.destroy');
