<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;

$adminPrefix = config('admin.prefix');

Route::prefix($adminPrefix)->as('admin.')->group(function () {
    Route::get('/', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/authorize', [AdminAuthController::class, 'authorize'])->name('login.authorize');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/member', [MemberController::class, 'index'])->name('member');
    Route::match(['get', 'post'], '/member/edit/{id}', [MemberController::class, 'edit'])->name('member.edit');
    Route::delete('/member/{id}', [MemberController::class, 'destroy'])->name('member.destroy');
});