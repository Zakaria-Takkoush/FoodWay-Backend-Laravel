<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ReviewController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/users/{id?}', [UserController::class, 'getAllUsers']);
Route::get('/restaurants/{id?}', [RestoController::class, 'getAllRestos']);
Route::get('/reviews/{id?}', [ReviewController::class, 'getAllReviews']);
Route::get('/ratings/{id?}', [ReviewController::class, 'getAllRatings']);

// Route::get('/search/{name}', [RestoController::class, 'getRestoByName']);
Route::get('/get_resto/{id}', [RestoController::class, 'getResto']);

Route::get('/get_resto_reviews/{id}', [ReviewController::class, 'getRestoreview']);

Route::post('/add_resto', [RestoController::class, 'addResto']);

Route::post('/signup', [UserController::class, 'signUp']);
Route::post('/login', [UserController::class, 'login']);

