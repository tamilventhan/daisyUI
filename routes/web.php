<?php

use App\Livewire\Vendors;
use App\Livewire\VendorHandler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/vendors',Vendors::class)->name('vendors');
    Route::get('/manage/vendors', VendorHandler::class)->name('manage-vendors');
    
    
});
