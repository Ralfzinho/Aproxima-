<?php

namespace App\Http\Controllers;

use App\Models\causa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CausaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $causas = causa::orderByDesc('id')
            ->paginate(5)                
            ->withQueryString();
        return view("causas.index", compact("causas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("causas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255|unique:causas,nome',
            'descricao' => 'required|string',
        ]);

        $causa = new Causa([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
        ]);

        $causa->save();
        return redirect()->route('causas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $causa = Causa::findOrFail($id);
        return view('causas.show', compact('causa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $causa = Causa::findOrFail($id);
        return view('causas.edit', compact('causa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => [
                'required',
                'string',
                'max:255',
                Rule::unique('causas', 'nome')->ignore($id),
            ],
        ]);

        // Busca a causa pelo ID
        $causa = causa::findOrFail($id);

        // Atualiza com os novos valores
        $causa->update([
            'nome' => $request->nome
        ]);

        // Redireciona de volta para a lista com mensagem de sucesso
        return redirect()->route('causas.index')
            ->with('success', 'causa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $causa = Causa::findOrFail($id);

        try {
            $causa->delete(); 
            return redirect()
                ->route('causas.index')
                ->with('success', 'Causa excluída com sucesso!');
        } catch (\Throwable $e) {
            return redirect()
                ->route('causas.index')
                ->withErrors('Não foi possível excluir a causa. ' . $e->getMessage());
        }
    }
}
