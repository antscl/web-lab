<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntityController; 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/entities', [EntityController::class, 'index']);
