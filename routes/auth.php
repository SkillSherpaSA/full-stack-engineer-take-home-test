<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')
    ->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::any('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
    });
