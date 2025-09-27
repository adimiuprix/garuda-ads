<?php

use Illuminate\Support\Facades\Route;

$adminPrefix = config('admin.prefix');

Route::prefix($adminPrefix)->as('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});