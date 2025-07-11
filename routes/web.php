<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\PublicBlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\opportunitiesController;

// Public routes
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('blogs', [PublicBlogController::class, 'index'])->name('public.blogs.index');
Route::get('blogs/{blog}', [PublicBlogController::class, 'show'])->name('public.blogs.show');


Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');


Route::get('/opportunities', [opportunitiesController::class, 'index'])->name('opportunities.index');




// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest:admin');
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:admin')->group(function () {
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('profile', [ProfileController::class, 'show'])->name('admin.profile');
        Route::patch('profile', [ProfileController::class, 'update'])->name('admin.profile.update');
        Route::patch('profile/password', [ProfileController::class, 'updatePassword'])->name('admin.profile.password');
        Route::resource('blogs', BlogController::class)->except(['show']);
    });
});