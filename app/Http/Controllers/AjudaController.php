<?php

namespace App\Http\Controllers;

use App\Models\ajuda;
use Illuminate\Http\Request;

class AjudaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ajudas = ajuda::all();
        return view('ajudas.index', compact('ajudas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajudas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ajuda = new ajuda([
            'nome' => $request->input('nome')
        ]);

        $ajuda->save();

        return redirect()->route('ajudas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ajuda = Ajuda::findOrFail($id);
        return view('ajudas.show', compact('ajuda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ajuda = \App\Models\Ajuda::findOrFail($id);
        return view('ajudas.edit', compact('ajuda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validação simples
    $request->validate([
        'nome' => 'required|string|max:255',
    ]);

    // Busca a ajuda pelo ID
    $ajuda = \App\Models\Ajuda::findOrFail($id);

    // Atualiza com os novos valores
    $ajuda->update([
        'nome' => $request->nome
    ]);

    // Redireciona de volta para a lista com mensagem de sucesso
    return redirect()->route('ajudas.index')
                     ->with('success', 'Ajuda atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $ajuda = Ajuda::findOrFail($id);

    try {
        $ajuda->delete(); // se houver FK em ong_ajuda com ON DELETE CASCADE, vai apagar o pivot também
        return redirect()
            ->route('ajudas.index')
            ->with('success', 'Ajuda excluída com sucesso!');
    } catch (\Throwable $e) {
        // Se der erro de FK (sem cascade) ou outro problema, volta com mensagem
        return redirect()
            ->route('ajudas.index')
            ->withErrors('Não foi possível excluir a ajuda. '.$e->getMessage());
    }
    }
}
