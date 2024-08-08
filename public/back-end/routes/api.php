<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VeterinarianController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\TrainerController;
use App\Http\Controllers\API\ElevageController;
use App\Http\Controllers\API\ReviewController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('veterinarians', VeterinarianController::class);
    Route::apiResource('users',UserController::class);
    Route::apiResource('trainers',TrainerController::class);
    Route::apiResource('elevages',ElevageController::class); 
    Route::apiResource('reviews',ReviewController::class); 
// });
