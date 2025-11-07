<?php

// app/Http/Controllers/OngController.php
namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use App\Models\causa;

class OngController extends Controller
{
    public function create(){
        $causas = Causa::orderBy('nome')->get();
        return view('cadastro_ong', compact('causas'));
    }
    public function store(Request $request)
    {
        $validated = Ong::validateCadastro($request->all());
        $ong     = Ong::createCadastro($validated);

        // se não há autenticação de ONG, só redireciona com flash
        return redirect()->route('inicio')->with('success', 'ONG cadastrada com sucesso!');
    }
}
