<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return redirect("/login");
});


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware("auth");
Route::get('/invalid', [DashboardController::class, 'invalidpage'])->middleware("auth");
Route::get('/valid', [DashboardController::class, 'validpage'])->middleware("auth");

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

