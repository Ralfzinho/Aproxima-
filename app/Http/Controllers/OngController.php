<?php

// app/Http/Controllers/OngController.php
namespace App\Http\Controllers;

use App\Models\Causa;
use App\Models\Ong;
use Illuminate\Http\Request;

class OngController extends Controller
{
    /**
     * Mostra o formulário para criar uma nova ONG.
     */
    public function create()
    {
        $causas = Causa::orderBy('nome')->get();
        return view('cadastro_ong', compact('causas'));
    }

    /**
     * Armazena uma nova ONG no banco de dados.
     */
    public function store(Request $request)
    {
        $validated = Ong::validateCadastro($request->all());
        $ong     = Ong::createCadastro($validated);

        return redirect()->route('inicio')->with('success', 'ONG cadastrada com sucesso!');
    }
}
