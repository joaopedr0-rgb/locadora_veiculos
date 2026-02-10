@extends('layout.app')
@section('title', 'Criar Cliente')
@section('content')
    <div class="box">
        <div class="container">
            <h1>Criar Cliente</h1>
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="idade">idade:</label>
                    <input type="text" name="idade" id="idade" class="form-control" required>
                </div>
                <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <select name="status" class="form-control" required>
                    <option value="Selecione o Status">Selecione o Status</option>
                    <option value="ativo">Ativo</option>
                    <option value="inativo">Inativo</option>
                </select>
            </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Salvar Cliente</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
@endsection
        </form>
    </div>
</div>