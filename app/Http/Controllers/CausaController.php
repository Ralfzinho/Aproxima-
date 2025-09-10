<?php

namespace App\Http\Controllers;

use App\Models\causa;
use Illuminate\Http\Request;

class CausaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $causas = Causa::all();
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
        $causa = new Causa ([
            'nome' => $request->input('nome'),
        ]);
        $causa->save();
        return redirect()->route('causas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
