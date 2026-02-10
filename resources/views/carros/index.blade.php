@extends('layout.app')
@section('title', 'Lista de Carros')
@section('content')






    <div class="box">
        <div class="container">
            <h1>Lista de Carros </h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
                        <th>Placa</th>
                        <th>Cor</th>
                        <th>Status</th>
                        <th>Preço Diária</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($carros as $carro)
                        <tr>
                            <td>{{ $carro->marca }}</td>
                            <td>{{ $carro->modelo }}</td>
                            <td>{{ $carro->ano }}</td>
                            <td>{{ $carro->placa }}</td>
                            <td>{{ $carro->cor }}</td>
                            <td>{{ $carro->status }}</td>
                            <td>{{ $carro->preco_diaria }}</td>
                            <td>
                                <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('carros.destroy', $carro->id) }}" method="POST"
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