<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\JoinMemberController;

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/join', [JoinMemberController::class, 'index'])->middleware('guest')->name('join-member');
Route::match(['get', 'post'], '/signin', [SigninController::class, 'index'])->middleware('guest')->name('signin');
Route::get('/signout', [SigninController::class, 'signout'])->name('signout');

Route::middleware(['checksession'])->group(function () {
    Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('dashboard');
    Route::get('/show/{product}', [MemberController::class, 'product'])->name('product.show');
    Route::get('/profile', [MemberController::class, 'profile'])->name('profile');
    Route::get('/upgrade', [MemberController::class, 'upgrade'])->name('upgrade');
    Route::post('/upgrade', [MemberController::class, 'upgradeProcess'])->name('upgrade.process');
    Route::get('/invoice', [MemberController::class, 'invoice'])->name('invoice');
    Route::post('/send_invoice/{invoice}', [MemberController::class, 'send_invoice'])->name('send.invoice');
    Route::get('/affiliate', [MemberController::class, 'affiliate'])->name('affiliate');
    Route::get('/penarikan', [MemberController::class, 'withdraw'])->name('withdraw');
});

require __DIR__.'/admin.php';