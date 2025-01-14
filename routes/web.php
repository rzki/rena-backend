<?php

use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserCreate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');


Route::middleware('auth')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/{userId}/edit', UserCreate::class)->name('users.create');
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('logout', Logout::class)->name('logout');
});
