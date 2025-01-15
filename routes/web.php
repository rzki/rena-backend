<?php

use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\QR\QrEdit;
use App\Livewire\QR\QrGenerate;
use App\Livewire\QR\QrIndex;
use App\Livewire\Auth\Logout;
use App\Livewire\QR\QrCreate;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Users\UserIndex;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Users\UserCreate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');


Route::middleware('auth')->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/{userId}/edit', UserCreate::class)->name('users.edit');
    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('roles/create', RoleCreate::class)->name('roles.create');
    Route::get('roles/{roleId}/edit', RoleEdit::class)->name('roles.edit');
    Route::get('qr-code', QrIndex::class)->name('qrcode.index');
    Route::get('qr-code/create', QrCreate::class)->name('qrcode.create');
    Route::get('qr-code/{qrId}/edit', QrEdit::class)->name('qrcode.edit');
    Route::get('qr-code/generate', QrGenerate::class)->name('qrcode.generate');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('logout', Logout::class)->name('logout');
});
