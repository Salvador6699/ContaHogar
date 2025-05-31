<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
Route::middleware('guest')->group(function () {
    Route::get('/register', \App\Livewire\Auth\Register::class);
    Route::get('/login', \App\Livewire\Auth\Login::class);
});
