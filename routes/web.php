<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WriterController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.show');
Route::get('/about', [AboutController::class, 'index'])->name('about');