<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index']);

Route::name('admin.')
    ->prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', [AdminIndexController::class, 'index'])->name('index');
        Route::get('/add', [AdminNewsController::class, 'add'])->name('add');
    });

Route::name('news.')
    ->namespace('News')
    ->group(function() {
        Route::get('news/', [NewsController::class, 'index'])->name('index');
        Route::get('/news/{id}', [NewsController::class, 'show'])->name('show');
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
        Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('category');
    });



Route::name('auth.')
    ->namespace('Auth')
    ->group(function() {
        Route::get('/auth', [AuthController::class, 'index'])->name('index');
        Route::post('/auth', [AuthController::class, 'login'])->name('login');
    });

Route::redirect('redirect', '/', 301);