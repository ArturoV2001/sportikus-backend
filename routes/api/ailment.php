<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AilmentController;

Route::get('ailments', [AilmentController::class, 'index'])->name('ailments.index');
Route::post('ailments', [AilmentController::class, 'store'])->name('ailments.store');
Route::get('ailments/{ailment}', [AilmentController::class, 'show'])->name('ailments.show');
Route::put('ailments/{ailment}', [AilmentController::class, 'update'])->name('ailments.update');
Route::delete('ailments/{ailment}', [AilmentController::class, 'destroy'])->name('ailments.destroy');
