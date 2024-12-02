<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

// Rutas de autenticación
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Rutas protegidas
Route::middleware(['auth:api'])->group(function () {
    Route::middleware('auth:api')->get('logout', [AuthController::class, 'logout']);
    Route::get('check-session', [AuthController::class, 'checkSession'])->name('auth.check-session');
    Route::post('change-password', [AuthController::class, 'changePassword'])->name('auth.change-password');

    include __DIR__ . '/api/ailment.php';
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
    include __DIR__ . '/api/recommendation_user.php';
    include __DIR__ . '/api/routine.php';
    include __DIR__ . '/api/routine_exercise.php';
    include __DIR__ . '/api/exercise_best_performance.php';
    include __DIR__ . '/api/user.php';
});
