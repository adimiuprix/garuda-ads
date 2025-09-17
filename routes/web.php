<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\JoinMemberController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/join', [JoinMemberController::class, 'index'])->name('join-member');
Route::match(['get', 'post'], '/signin', [SigninController::class, 'index'])->name('signin');
Route::get('/signout', [SigninController::class, 'signout'])->name('signout');

Route::middleware(['checksession'])->group(function () {
    Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
    Route::get('/show/{product}', [MemberController::class, 'product'])->name('product.show');
    Route::get('/profile', [MemberController::class, 'profile'])->name('profile');
    Route::get('/upgrade', [MemberController::class, 'upgrade'])->name('upgrade');
});
