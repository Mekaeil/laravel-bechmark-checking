<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\GetBooksController;
use App\Http\Controllers\GetUsersController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/sample', SampleController::class)->withoutMiddleware("throttle:api");

Route::post('/books', BooksController::class)->withoutMiddleware("throttle:api");

Route::get('/books', GetBooksController::class)->withoutMiddleware("throttle:api");

Route::post('users', UsersController::class)->withoutMiddleware("throttle:api");

Route::get('users', GetUsersController::class)->withoutMiddleware("throttle:api");
