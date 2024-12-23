<?php

use App\Http\Controllers\BiometricDataController;
use Illuminate\Support\Facades\Route;

Route::get('biometric-data', [BiometricDataController::class, 'index'])->name('biometric-data.index');
Route::post('biometric-data', [BiometricDataController::class, 'store'])->name('biometric-data.store');
Route::get('biometric-data/{biometric_data}', [BiometricDataController::class, 'show'])->name('biometric-data.show');
Route::put('biometric-data/{biometric_data}', [BiometricDataController::class, 'update'])->name('biometric-data.update');
Route::delete('biometric-data/{biometric_data}', [BiometricDataController::class, 'destroy'])->name('biometric-data.destroy');
Route::post('biometric-data-generate-recommendation', [BiometricDataController::class, 'generateRecommendation'])->name('biometric-data.generate-recommendation');
