<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    
    public function index()
    {
        $clientes = Cliente::all();
        return view("clientes.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'idade' => ['required', 'integer', 'min:0'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clientes'],
        ]);

        Cliente::create($validated);
        return redirect()->route('clientes.index');
    }

   
    public function edit(Cliente $clientes)
    {
        return view('clientes.edit', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $clientes)
    {
        $clientes = Cliente::findOrFail($clientes->id);
        $clientes->update($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $clientes)
    {   
        $clientes = Cliente::findOrFail($clientes->id);
        $clientes->delete();
        return redirect()->route('clientes.index');
    }
}
