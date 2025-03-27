<?php 

use App\Http\Controllers\LoginController;

Route::middleware('guest')->group(function () {
  Route::get('/', [LoginController::class, 'login'])->name('login');
  Route::post('/', [LoginController::class, 'auth'])->name('auth');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');