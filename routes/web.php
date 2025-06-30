<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Auth;


Route::prefix('merchant')
    ->middleware(['auth', 'verified'])
    ->name('merchant.')
    ->group(function () {

        Volt::route('/', 'merchant.dashboard')->name('dashboard');

        Route::redirect('settings', 'merchant/settings/profile');

        Volt::route('gift-card', 'merchant.gift-card')->name('gift-card');
        Volt::route('settings/password', 'settings.password')->name('settings.password');
        Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

        Volt::route('coupons', 'coupons.index')->name('coupons.index');
        Volt::route('coupons/create', 'coupons.create')->name('coupons.create');
    });



Auth::routes();
Route::get('/shopify/install', [App\Http\Controllers\ShopifyController::class, 'install']);
Route::get('/shopify/callback', [App\Http\Controllers\ShopifyController::class, 'callback']);
Route::get('/', [App\Http\Controllers\WebController::class, 'index']);
Route::get('/platforms', [App\Http\Controllers\WebController::class, 'platforms']);
//Dashboard Pages
Route::get('/dashboard', [App\Http\Controllers\WebController::class, 'dashboard']);
Route::get('/gift-card', [App\Http\Controllers\WebController::class, 'giftCard']);
Route::get('/commission', [App\Http\Controllers\WebController::class, 'commission']);
Route::get('/analytics', [App\Http\Controllers\WebController::class, 'analytics']);
Route::get('/settings', [App\Http\Controllers\WebController::class, 'settings']);
Route::get('/payment', [App\Http\Controllers\WebController::class, 'payment']);


