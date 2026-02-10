@extends('layout.app')

@section('content')
<div class="container">
    <h1>Novo Aluguel</h1>
    <form action="{{ route('alugueis.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Cliente</label>
            <select name="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Carro</label>
            <select name="carro_id" class="form-control">
                @foreach($carros as $carro)
                    <option value="{{ $carro->id }}">{{ $carro->modelo }} - {{ $carro->placa }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Data de Início</label>
            <input type="datetime-local" name="data_inicio" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Registrar Aluguel</button>
    </form>
</div>
@endsection