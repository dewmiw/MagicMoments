<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MusicCategoryController;
use App\Http\Controllers\DecorationCategoryController;

Route::get('/',HomeController::class)->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::resource('categories',CategoryController::class)
->middleware('auth:sanctum')
->name('index','categories');

Route::resource('restaurants',RestaurantController::class)
->name('index','restaurants');

Route::resource('musicCategories',MusicCategoryController::class)
    ->middleware('auth:sanctum')
    ->name('index','musicCategories');

Route::resource('decorationCategories',DecorationCategoryController::class)
    ->middleware('auth:sanctum')
    ->name('index','decorationCategories');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

