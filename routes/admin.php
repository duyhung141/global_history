<?php


use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,"dashboard"]);
Route::get('/user',[\App\Http\Controllers\AdminController::class,"user"]);
Route::get('/category',[\App\Http\Controllers\AdminController::class,"category"]);
