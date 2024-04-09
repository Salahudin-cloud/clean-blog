<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewCategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UpdateCategoriesController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// frontend
Route::get('/', [HomeController::class, 'index'])->name('home');

// backend 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('/categories/new_categories', [NewCategoriesController::class, 'index'])->name('categories.new_categories');
Route::post('/categories/new_categories/process', [NewCategoriesController::class, 'addAction'])->name('categories.add_process');

Route::get('/categories/update_categories/{id}', [UpdateCategoriesController::class, 'index'])->name('categories.update_categories');
Route::put('/categories/update_categories/process/{id}', [UpdateCategoriesController::class, 'updateAction'])->name('categories.update_process');



Route::get('/posts', [PostsController::class, 'index'])->name('posts');
