<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AilmentUserController;

Route::get('ailments-user', [AilmentUserController::class, 'index'])->name('ailments-user.index');
Route::post('ailments-user', [AilmentUserController::class, 'store'])->name('ailments-user.store');
Route::get('ailments-user/{ailment_user}', [AilmentUserController::class, 'show'])->name('ailments-user.show');
Route::put('ailments-user/{ailment_user}', [AilmentUserController::class, 'update'])->name('ailments-user.update');
Route::delete('ailments-user/{ailment_user}', [AilmentUserController::class, 'destroy'])->name('ailments-user.destroy');
