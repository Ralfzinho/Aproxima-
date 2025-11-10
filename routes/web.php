<?php

use App\Http\Controllers\AjudaController;
use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CausaController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Causa;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\OngController;
use App\Http\Controllers\VoluntarioController;

Route::middleware(['auth'])->group(function () {
    Route::view('/inicio', 'index')->name('inicio')->middleware('verified');
    Route::view('/admin', 'admin.index')->name('admin.index');
});

// Cadastro de Voluntário
Route::get('/cadastro_voluntario', [VoluntarioController::class, 'create'])->name('cadastro_voluntario');
Route::post('/cadastro_voluntario', [VoluntarioController::class, 'store'])->name('cadastro_voluntario.store');

// Cadastro de ONG
Route::get('/cadastro_ong', [OngController::class, 'create'])->name('cadastro_ong');
Route::post('/cadastro_ong', [OngController::class, 'store'])->name('cadastro_ong.store');


Route::view('/', 'welcome')->name('home');
Route::view('/como-funciona', 'comofunciona')->name('como-funciona');
Route::view('/ongs', 'ongs')->name('ongs');
Route::view('/infocausas', 'infocausas')->name('causas');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/admin', 'admin.index')->name('admin');
Route::view('/entrar', 'entrar')->name('entrar');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');


});
Route::resource('ajudas', AjudaController::class);
Route::resource('causas', CausaController::class);
Route::post('/ongs', [OngController::class, 'store'])->name('ongs.store');

require __DIR__ . '/auth.php';
