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

Route::middleware(['auth'])->group(function () {
    Route::view('/inicio', 'index')->name('inicio')->middleware('verified');
    Route::view('/admin', 'admin.index')->name('admin.index');
});

// GET do formulário
Route::get('/cadastro_voluntario', function () {
    $causas = Causa::orderBy('nome')->get();
    return view('cadastro_voluntario', compact('causas'));
})->name('cadastro_voluntario');

// POST do formulário
Route::post('/cadastro_voluntario', function (Request $request) {
    $validated = User::validateVoluntario($request->all());
    $user      = User::createVoluntario($validated);

    Auth::login($user);

    // redireciona para a tela de início (home '/')
    return redirect()->route('inicio');
})->name('cadastro_voluntario.store');

// GET do formulário
Route::get('/cadastro_ong', function () {
    $causas = Causa::orderBy('nome')->get();
    return view('cadastro_ong', compact('causas'));
})->name('cadastro_ong');

// POST do formulário 
Route::post('/cadastro_ong', function (Request $request) {
    $validated = Ong::validateCadastro($request->all());
    $ong     = Ong::createCadastro($validated);

    // se não há autenticação de ONG, só redireciona com flash
    return redirect()->route('inicio')->with('success', 'ONG cadastrada com sucesso!');
})->name('cadastro_ong.store');


Route::view('/', 'welcome')->name('home');
Route::view('/como-funciona', 'comofunciona')->name('como-funciona');
Route::view('/ongs', 'ongs')->name('ongs');
Route::view('/infocausas', 'infocausas')->name('causas');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/admin', 'admin.index')->name('admin');

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
