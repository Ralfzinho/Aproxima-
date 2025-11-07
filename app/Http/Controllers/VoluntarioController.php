<?php

namespace App\Http\Controllers;

use App\Models\Causa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoluntarioController extends Controller
{
    /**
     * Mostra o formulário para criar um novo voluntário.
     */
    public function create()
    {
        $causas = Causa::orderBy('nome')->get();
        return view('cadastro_voluntario', compact('causas'));
    }

    /**
     * Armazena um novo voluntário no banco de dados.
     */
    public function store(Request $request)
    {
        $validated = User::validateVoluntario($request->all());
        $user      = User::createVoluntario($validated);

        Auth::login($user);

        return redirect()->route('inicio');
    }
}
