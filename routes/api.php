<?php

use App\Http\Controllers\AuthController;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http://localhost:8000/api/
// users
// recipes (title, meal type, number of people served, difficulty, list of ingredients(including their amounts), and the preperation steps
// 

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/recipes', function() {
    return Recipes::all();
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
