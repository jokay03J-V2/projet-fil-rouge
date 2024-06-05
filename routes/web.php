<?php

use App\Http\Controllers\UrgencyNumberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/numbers/', [UrgencyNumberController::class, 'index'])->name('page.numbers');