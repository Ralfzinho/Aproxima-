<?php

use App\Http\Controllers\AjudaController;
use App\Http\Controllers\CausaController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/inicio', 'index')->name('inicio')->middleware('verified');
    Route::view('/admin', 'admin.index')->name('admin.index');
});


Route::view('/', 'welcome')->name('home');
Route::view('/como-funciona', 'comofunciona')->name('como-funciona');
Route::view('/ongs', 'ongs')->name('ongs');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/cadastro_voluntario', 'cadastro_voluntario')->name('cadastro_voluntario');
Route::view('/cadastro_ong', 'cadastro_ong')->name('cadastro_ong');




Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('/causas', [CausaController::class, 'index'])->name('causas.index');
    Route::get('/ajudas', [AjudaController::class, 'index'])->name('ajudas.index');
    
});
Route::resource('ajudas', AjudaController::class);
Route::resource('causas', CausaController::class);

require __DIR__ . '/auth.php';
