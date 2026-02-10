@extends('layout.app')
@section('content')
@section('title', 'Novo Carro')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops! Encontramos alguns problemas:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-body">
        <form action="{{ route('carros.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" class="form-control" id="placa" name="placa" required>
            </div>
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" class="form-control" id="ano" name="ano" required>
            </div>
            <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <select name="status" class="form-control" required>
                    <option value="Selecione o Status">Selecione o Status</option>
                    <option value="disponivel">Disponível</option>
                    <option value="manutencao">Manutenção</option>
                    <option value="alugado">Alugado</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="preco_diaria" class="form-label">Preço Diária</label>
                <input type="number" step="0.01" class="form-control" id="preco_diaria" name="preco_diaria" required>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Salvar Veículo</button>
                <a href="{{ route('carros.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
@endsection
    </form>
</div>