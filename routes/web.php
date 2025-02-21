<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "welcome"])->name("welcome");

Route::get('publications', [PublicationController::class, 'index'])->name("publications.index");
Route::get('publications/create', [PublicationController::class, 'create'])->name('publications.create');
Route::post('publications', [PublicationController::class, 'store'])->name('publications.store');
Route::get('publications/{id}', [PublicationController::class, 'show'])->name('publications.show');
Route::delete('publications/{id}', [PublicationController::class, 'destroy'])->name('publications.destroy');

Route::get('recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('recipes', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::delete('recipes/{id}', [RecipeController::class, 'destroy'])->name('recipes.destroy');

Route::get('comments/create', [CommentController::class], 'create')->name('comments.create');
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');