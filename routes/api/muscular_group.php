<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscularGroupController;

Route::get('muscular-groups', [MuscularGroupController::class, 'index'])->name('muscular-groups.index');
Route::post('muscular-groups', [MuscularGroupController::class, 'store'])->name('muscular-groups.store');
Route::get('muscular-groups/{muscular_group}', [MuscularGroupController::class, 'show'])->name('muscular-groups.show');
Route::put('muscular-groups/{muscular_group}', [MuscularGroupController::class, 'update'])->name('muscular-groups.update');
Route::delete('muscular-groups/{muscular_group}', [MuscularGroupController::class, 'destroy'])->name('muscular-groups.destroy');
