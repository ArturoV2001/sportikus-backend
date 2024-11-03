<?php

use App\Http\Controllers\RoutineController;
use Illuminate\Support\Facades\Route;

Route::get('routines', [RoutineController::class, 'index'])->name('routines.index');
Route::post('routines', [RoutineController::class, 'store'])->name('routines.store');
Route::get('routines/{routine}', [RoutineController::class, 'show'])->name('routines.show');
Route::put('routines/{routine}', [RoutineController::class, 'update'])->name('routines.update');
Route::delete('routines/{routine}', [RoutineController::class, 'destroy'])->name('routines.destroy');
