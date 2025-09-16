<?php

use App\Http\Controllers\AjudaController;
use App\Http\Controllers\CausaController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    // Retorne a view do dashboard
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('index', 'index')
    ->middleware(['auth', 'verified'])
    ->name('inicio');

Route::get('/como-funciona', function () {
    return view('comofunciona');
})->name('como-funciona');


Route::get('/ongs', function () {
    return view('ongs');
})->name('ongs');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('/causas', [CausaController::class, 'index'])->name('causas.index');
});
Route::resource('ajudas', AjudaController::class);
Route::resource('causas', CausaController::class);

require __DIR__ . '/auth.php';
