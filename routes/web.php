<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/test', function () {
  
});

Volt::route('/', 'welcome.index')->name('welcome');

// food-items group
Route::group(['prefix' => 'food-items', 'as' => 'food-items.'], function () {
    // items
    Volt::route('/', 'food-items.index')->name('index');
    // item-details
    Volt::route('/{id}', 'food-items.details')->name('details');
});



Route::group(['middleware' => ['auth', 'verified']], function () {
    

    // user account group 
    // Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
      
    // });

    Volt::route('dashboard', 'account.dashboard')
           ->name('dashboard');
    Volt::route('password', 'account.password')
           ->name('password');

    // admin account group
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Volt::route('/settings', 'account.settings.index')->name('settings');
        Volt::route('/users', 'account.users.index')->name('users');
        Volt::route('/roles', 'account.roles.index')->name('roles');
        Volt::route('/blogs', 'account.blogs.index')->name('config-blogs');
        Volt::route('/categories', 'account.categories.index')->name('categories');
        Volt::route('/stores', 'account.stores.index')->name('stores');
        Volt::route('/sliders', 'account.sliders.index')->name('sliders');
        Volt::route('/banners', 'account.banners.index')->name('banners');
        Volt::route('/food-items', 'account.food-items.index')->name('food-items');
    });

});



Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
