<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [ContactController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::post('/categories', [CategoryController::class, 'store']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
