<?php

namespace App\Http\Controllers;

use App\Models\carro;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = carro::all();
        return view ('carros.index', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request ->validate([
            'marca' => ['required', 'string', 'max:255'],
            'modelo' => ['required', 'string', 'max:255'],
            'ano' => ['required', 'digits:4', 'integer', 'min:1990'],
            'placa' => ['required', 'string', 'max:10', 'unique:carros'],
            'cor' => ['required', 'string', 'max:50'],
            'status' => ['required', 'string', 'max:50'],
            'preco_diaria' => ['required', 'numeric', 'min:0'],
        ]);
        Carro::create($validated);
        return redirect()->route('carros.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carro $carro)
    {
        
        return view('carros.edit', compact('carro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carro $carro)
    {
      $carro = Carro::findOrFail($carro->id);
      $carro->update($request->all());
      return redirect()->route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carro = Carro::findOrFail($id);
        $carro->delete();
        return redirect()->route('carros.index');
    }
}
