<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('links', LinkController::class)->except(['show']);
Route::resource('categories', CategoryController::class)->except(['show']);
