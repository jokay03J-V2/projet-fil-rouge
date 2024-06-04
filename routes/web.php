<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('page.home');

Route::get('/advices', [AdviceController::class, 'index']);
Route::post('/advices', [AdviceController::class, 'search']);