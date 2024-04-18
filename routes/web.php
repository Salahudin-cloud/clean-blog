<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewCategoriesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostsControllerNew;
use App\Http\Controllers\PostsControllerUpdate;
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


// backend : posts
Route::get('posts/admin', [PostsController::class, 'index'])->name('posts');
Route::get('posts/admin/new', [PostsControllerNew::class, 'index'])->name('posts_new');
Route::post('posts/admin/new/process', [PostsControllerNew::class, 'actionAddPosts'])->name('posts_new_process');

Route::get('posts/admin/update/', [PostsControllerUpdate::class, 'index'])->name('posts_update');
