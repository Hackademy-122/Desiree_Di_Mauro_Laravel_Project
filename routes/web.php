<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/article/create', [ArticleController::class, 'create'])->name('article_create');

Route::get('/aboutUs', [PublicController::class,'aboutUs'])->name('ChiSiamo');

Route::get('/servizi', [PublicController::class, 'service'])->name('servizi');

Route::get('/submit', [PublicController::class, 'iscriviti'])->name('iscrizione');

Route::post('/profilo', [PublicController::class, 'profilo'])->name('user');

Route::post('/article/store', [ArticleController:: class, 'store'])->name('article_store');