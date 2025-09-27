<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

$adminPrefix = config('admin.prefix');

Route::prefix($adminPrefix)->as('admin.')->group(function () {
    Route::get('/', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/authorize', [AdminAuthController::class, 'authorize'])->name('login.authorize');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});