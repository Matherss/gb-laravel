<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/admin', [AdminIndexController::class, 'index']);

Route::name('/news.')
    ->prefix('news')
    ->namespace('News')
    ->group(function() {

        Route::get('/', [NewsController::class, 'index']);
        Route::get('/add', [NewsController::class, 'add']); // вот тут непонятная штука. пришлось поставить перед /{id}. Изначально я хотел сделать роут /news-add, но не знаю как его оформить правильно. Route::get('-add') не сработало
        Route::get('/{id}', [NewsController::class, 'show']);
    });


Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'login']);

Route::redirect('redirect', '/', 301);