<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "welcome"])->name("welcome");

Route::resource("publications", PublicationController::class);
Route::resource("recipes", RecipeController::class);
Route::resource("comments", CommentController::class);
