<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

include __DIR__ . '/api/ailment.php';
include __DIR__ . '/api/ailment_user.php';
include __DIR__ . '/api/biometric_data.php';
include __DIR__ . '/api/category.php';
include __DIR__ . '/api/exercise.php';
include __DIR__ . '/api/food.php';
include __DIR__ . '/api/food_unit.php';
include __DIR__ . '/api/meal.php';
include __DIR__ . '/api/meal_food.php';
include __DIR__ . '/api/muscle.php';
include __DIR__ . '/api/muscular_group.php';
include __DIR__ . '/api/recommendation.php';
include __DIR__ . '/api/routine.php';
include __DIR__ . '/api/routine_exercise.php';
include __DIR__ . '/api/exercise_best_performance.php';
include __DIR__ . '/api/user.php';
