<?php

use App\Livewire\Actions\Logout;
use App\Livewire\Items\Items;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/logout', Logout::class)->name('logout');;
    Route::view('profile', 'profile')->name('profile');
    Route::group(['middleware' => ['role:Admin']], function() {
        // Tambahkan rute lain di sini
        Route::get('/items', Items::class)->name('items');
    });

});

require __DIR__.'/auth.php';
