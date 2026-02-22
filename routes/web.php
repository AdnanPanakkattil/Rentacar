<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/wedding-cars', function () {
    return view('wedding-cars');
})->name('wedding-cars');

Route::get('/cars-sales', function () {
    return view('cars-sales');
})->name('cars-sales');

Route::get('/rent-cars', function () {
    return view('rent-cars');
})->name('rent-cars');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/language/{locale}', [LanguageController::class, 'switch'])
    ->name('language.switch');