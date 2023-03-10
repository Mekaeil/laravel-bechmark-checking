<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/sample', SampleController::class);

Route::post('/books', BooksController::class);

Route::post('users', UsersController::class);
