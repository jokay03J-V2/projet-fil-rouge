<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PractitionersController;
use App\Http\Controllers\UrgencyNumberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('page.home');
Route::get('/advices', [AdviceController::class, 'index'])->name('page.advices');
Route::get('/advices/{advice}', [AdviceController::class, 'show'])->name('page.advice');
Route::get('/numbers', [UrgencyNumberController::class, 'index'])->name('page.numbers');
Route::get('/information-point', [\App\Http\Controllers\InformationPointController::class, 'index'])->name('information.point');
Route::get('/practitioners', [PractitionersController::class, 'showPractitioner'])->name('page.find_practitioners');
Route::get('/mentions-legales', function () {
    return view('legal');
})->name('page.legal');


// admin
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin/home');
    })->name('admin.home');

    Route::get('/register', [UserController::class, 'showRegister'])->name('admin.register.show');
    Route::post('/register', [UserController::class, 'register'])->name('admin.register');
    Route::get('/practitionersUpdate', [PractitionersController::class, 'requestJson'])->name('admin.update.practitioners');
});

Route::get('/login', [UserController::class, 'showLogin'])->name('page.login.show');
Route::get('/logout', [UserController::class, 'Logout'])->name('logout');



Route::post('/login', [UserController::class, 'Login'])->name('login');