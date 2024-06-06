<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\UrgencyNumberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('page.home');

Route::get('/advices', [AdviceController::class, 'index'])->name('page.advices');
Route::get('/advices/{id}', [AdviceController::class, 'show'])->name('page.advice');
Route::get('/numbers', [UrgencyNumberController::class, 'index'])->name('page.numbers');