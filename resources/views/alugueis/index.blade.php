@extends('layout.app')
@section('title', 'Lista de Alugueis')
@section('content')
    <div class="box">
        <div class="container">
            <h1>Lista de Alugueis</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Carro</th>
                        <th>Data de Início</th>
                        <th>Data de Fim</th>
                        <th>Valor Total</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($alugueis as $aluguel)
                        <tr>
                            <td>{{ $aluguel->cliente->nome }}</td>
                            <td>{{ $aluguel->carro->modelo }} - {{ $aluguel->carro->placa }}</td>
                            <td>{{ $aluguel->data_inicio }}</td>
                            <td>{{ $aluguel->data_fim }}</td>
                            <td>{{ $aluguel->valor_total }}</td>
                            <td>{{ $aluguel->status }}</td>
                            <td>
                                <a href="{{ route('alugueis.edit', $aluguel->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('alugueis.destroy', $aluguel->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection