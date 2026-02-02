<?php

use App\Http\Controllers\Api\V1\RecipeController;
use App\Http\Controllers\AuthController;
use App\Models\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// http://localhost:8000/api/recipes
// http://localhost:8000/api/v1/recipes
// users
// recipes (title, meal type, number of people served, difficulty, list of ingredients(including their amounts), and the preperation steps


Route::middleware('auth:sanctum')->apiResource('v1/recipes', RecipeController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
