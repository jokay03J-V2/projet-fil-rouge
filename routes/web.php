<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\UrgencyNumberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('page.home');

Route::get('/advices', [AdviceController::class, 'index'])->name('page.advices');
Route::get('/numbers', [UrgencyNumberController::class, 'index'])->name('page.numbers');
Route::get('/practitioners', function () {
    return view('find_practitioners');
})->name('page.find_practitioners');