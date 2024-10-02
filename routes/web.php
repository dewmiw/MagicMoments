<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MusicCategoryController;
use App\Http\Controllers\DecorationCategoryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagementController;

Route::get('/',HomeController::class)->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::resource('categories',CategoryController::class)
->name('index','categories');

Route::resource('restaurants',RestaurantController::class)
->name('index','restaurants');

Route::resource('musicCategories',MusicCategoryController::class)
    ->name('index','musicCategories');

Route::resource('decorationCategories',DecorationCategoryController::class)
    ->name('index','decorationCategories');


Route::get('/book-now', function () {
    $menuPackages = \App\Models\Restaurant::all();
    $musicPackages = \App\Models\MusicCategory::all();
    $decorationPackages = \App\Models\DecorationCategory::all();

    return view('book-now', compact('menuPackages', 'musicPackages', 'decorationPackages'));
})
    ->middleware(['auth','verified'])
    ->name('book-now');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');



Route::get('/management', [ManagementController::class, 'index'])->name('management')->middleware('admin');

// Routes for creating new records
Route::post('/restaurants/create', [ManagementController::class, 'createRestaurant'])->name('restaurants.create');
Route::post('/music_categories/create', [ManagementController::class, 'createMusicCategory'])->name('music_categories.create');
Route::post('/decoration_categories/create', [ManagementController::class, 'createDecorationCategory'])->name('decoration_categories.create');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', function () {
        return view('Home');
    })->name('home');
});

