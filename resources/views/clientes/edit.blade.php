@extends('layout.app')
@section('title', 'Editar Cliente')
@section('content')
    <div class="box">
        <div class="container">
            <h1>Editar Cliente</h1>
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{ $cliente->nome }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $cliente->email }}" required>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="text" name="idade" id="idade" class="form-control" value="{{ $cliente->idade }}" required>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" name="status" id="status" class="form-control" value="{{ $cliente->status }}" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection