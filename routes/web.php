<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class,'welcome'])->name('home');

Route::get('/servizi', [PublicController::class, 'service'])->name('servizi');

Route::get('/aboutUs', [PublicController::class,'aboutUs'])->name('ChiSiamo');

//rotte article
Route::get('/article/create', [ArticleController::class, 'create'])->name('article_create');

 Route::get('/article/index', [ArticleController::class, 'index'])->name('article_index');

Route::post('/article/store', [ArticleController:: class, 'store'])->name('article_store');

Route::get('/article/show/{article}', [ArticleController::class,'show'])->name('article_show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article_edit');

Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article_update');

Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article_delete');

// rotte categorie
Route::get('/category/create', [CategoryController::class, 'create'])->name('category_create');

Route::post('/category/store', [CategoryController::class, 'store'])->name('category_store');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category_index');

Route::get('/category/show/{category}', [CategoryController::class,'show'])->name('category_show');

Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('category_edit');

Route::put('/category/update/{category}', [CategoryController::class, 'update'])->name('category_update');

Route::delete('/category/delete/{category}', [CategoryController::class, 'destroy'])->name('category_delete');