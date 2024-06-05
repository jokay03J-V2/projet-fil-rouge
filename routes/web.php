<?php

use App\Http\Controllers\UrgencyNumberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('page.home');

Route::get('/advices', function () {
    return view('advices');
});
