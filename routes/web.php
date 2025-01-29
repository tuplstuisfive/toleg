<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/hello', [HomeController::class, 'index']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/name', function () {
    return 'Ali Mahir';
});

Route::get('/projectname', function () {
    return 'Toleg';
});

Route::get('/sx1urname', function () {
    return 'Nurberdiyev';
});

Route::get('/course', function () {
    return 'C10';
});



