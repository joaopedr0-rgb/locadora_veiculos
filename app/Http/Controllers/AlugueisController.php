<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Carro;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AlugueisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View
    {
        $alugueis = Aluguel::with(['cliente', 'carro'])->get();
        $clientes = Cliente::all();
        $carros = Carro::all();

        
        return view('alugueis.index', compact('alugueis', 'clientes', 'carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $carros = Carro::all();
        return view('alugueis.create', compact('clientes', 'carros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'carro_id' => 'required|exists:carros,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'nullable|date|after_or_equal:data_inicio',
            'valor_total' => 'nullable|numeric',
        ]);

        Aluguel::create($validated);

        return redirect()->route('alugueis.index');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluguel $aluguel)
    {
        $clientes = Cliente::all();
        $carros = Carro::all();

        return view('alugueis.edit', compact('aluguel', 'clientes', 'carros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aluguel $aluguel)
    {
        $validated = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'carro_id' => 'required|exists:carros,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'nullable|date|after_or_equal:data_inicio',
            'valor_total' => 'nullable|numeric',
        ]);

        $aluguel->update($validated);

        return redirect()->route('alugueis.index')->with('success', 'Aluguel atualizado!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluguel $aluguel)
    {
        $aluguel->delete();

        return redirect()->route('alugueis.index');
    }
}
