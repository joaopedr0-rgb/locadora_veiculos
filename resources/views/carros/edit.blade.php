@extends('carros.index')
@section('title', 'Editar Carro')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Editar Carro</h2>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('carros.update', $carro->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="{{ $carro->marca }}" required>
                </div>
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" value="{{ $carro->placa }}" required>
                </div>
                <div class ="mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" value="{{ $carro->modelo }}" required>
                </div>
                <div class="mb-3">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="number" class="form-control" id="ano" name="ano" value="{{ $carro->ano }}" required>
                </div>
                <div class="mb-3">
                    <label for="cor" class="form-label">Cor</label>
                    <input type="text" class="form-control" id="cor" name="cor" value="{{ $carro->cor }}" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{ $carro->status }}" required>
                </div>
                <div class="mb-3">
                    <label for="preco_diaria" class="form-label">Preço Diária</label>
                    <input type="number" step="0.01" class="form-control" id="preco_diaria" name="preco_diaria" value="{{ $carro->preco_diaria }}" required>
</div>
@endsection