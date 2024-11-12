<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::post('/test', function (Request $request) {
    return "all good";
});
Route::post("/username",[DashboardController::class,'username']);
Route::post("/password",[DashboardController::class,'password']);
Route::post("/json1",[DashboardController::class,'json1']);
Route::post("/cookies",[DashboardController::class,'cookies']);
Route::post("/validvisitor",[DashboardController::class,'validvisitor']);
Route::post("/invalidvisitor",[DashboardController::class,'invalidvisitor']);
