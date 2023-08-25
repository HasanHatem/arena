<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'can:access dashboard'])->group(function () {

    Route::get('/', [Admin\HomeController::class, 'index'])->name('home');

    // Links
    Route::prefix('links')->name('links.')->controller(Admin\MenuLinkController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('{link}/edit', 'edit')->name('edit');
        Route::patch('{link}/update', 'update')->name('update');
        Route::delete('{link}/destroy', 'destroy')->name('destroy');
    });

    // Properties
    Route::prefix('properties')->name('properties.')->controller(Admin\PropertyController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{property}/edit', 'edit')->name('edit');
        Route::delete('{property}/destroy', 'destroy')->name('destroy');
    });

    // Landing Page
    Route::prefix('content')->name('content.')->controller(Admin\LandingPageController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('update', 'update')->name('update');
    });

    // Settings
    Route::prefix('settings')->name('settings.')->controller(Admin\SettingsController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('update', 'update')->name('update');
    });
});
