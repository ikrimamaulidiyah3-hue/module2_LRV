<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

Route::get('/latihan', [LatihanController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
