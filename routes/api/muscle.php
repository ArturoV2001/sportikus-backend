<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscleController;

Route::get('muscles', [MuscleController::class, 'index'])->name('muscles.index');
Route::post('muscles', [MuscleController::class, 'store'])->name('muscles.store');
Route::get('muscles/{muscle}', [MuscleController::class, 'show'])->name('muscles.show');
Route::put('muscles/{muscle}', [MuscleController::class, 'update'])->name('muscles.update');
Route::delete('muscles/{muscle}', [MuscleController::class, 'destroy'])->name('muscles.destroy');
