<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::post('register', [UserController::class, 'register']);
route::post('login', [UserController::class, 'login']);

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
