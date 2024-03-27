<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/browse_movies/', [MovieController::class, 'show']);
