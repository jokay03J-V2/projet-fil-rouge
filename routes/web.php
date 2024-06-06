<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
})->name('page.home');

Route::get('/advices', function () {
    return view('advices');
});

Route::get('/information-point', [\App\Http\Controllers\InformationPointController::class, 'index'])->name('information.point');


