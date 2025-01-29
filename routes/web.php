<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/hello', [HomeController::class, 'index']);
Route::get('/card/{id}', [HomeController::class, 'show']);

Route::get('/greeting', function () {
    return 'Hello World';
});






