<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ApiPostController;
use Illuminate\Support\Facades\Route;

Route::post('/register',[ApiAuthController::class,'register']);
Route::post('/login',[ApiAuthController::class,'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/create', [ApiPostController::class, 'createPost']);
    Route::put('/edit/{postId}', [ApiPostController::class, 'editPost']);
    Route::get('/show/{postId}', [ApiPostController::class, 'showPost']);
    Route::delete('/delete/{postId}', [ApiPostController::class, 'deletePostWithId']);
});
