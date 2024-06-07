<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('page.home');

Route::get('/advices', function () {
    return view('advices');
});

Route::get('/practitioners', function () {
    return view('find_practitioners');
})->name('page.find_practitioners');