<?php

use App\Http\Controllers\RecommendationUserController;
use Illuminate\Support\Facades\Route;

Route::get('recommendation-user', [RecommendationUserController::class, 'index'])->name('recommendation-user.index');
Route::get('get-recommendation-user', [RecommendationUserController::class, 'showRecommendation'])->name('recommendation-user.show');
