@extends('layout.app')
@section('title', 'Editar Aluguel')
@section('content')
    <div class="box">
        <div class="container">
            <h1>Editar Aluguel</h1>
            <form action="{{ route('alugueis.update', $aluguel->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Cliente</label>
                    <select name="cliente_id" class="form-control">
                        @foreach($clientes as $cliente)
                            <option value="{{ $cliente->id }}" {{ $aluguel->cliente_id == $cliente->id ? 'selected' : '' }}>
                                {{ $cliente->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Carro</label>
                    <select name="carro_id" class="form-control">
                        @foreach($carros as $carro)
                            <option value="{{ $carro->id }}" {{ $aluguel->carro_id == $carro->id ? 'selected' : '' }}>
                                {{ $carro->modelo }} - {{ $carro->placa }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label>Data de Início</label>
                    <input type="datetime-local" name="data_inicio" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($aluguel->data_inicio)) }}">
                </div>

                <div class="mb-3">
                    <label>Data de Fim</label>
                    <input type="datetime-local" name="data_fim" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($aluguel->data_fim)) }}">
                </div>

                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="{{ route('alugueis.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>