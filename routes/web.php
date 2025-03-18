<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Forgot;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('registe');
Route::get('/lupa', Forgot::class)->name('forgot');
