<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de veiculos- @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="box">
        <div class="container">
            @yield('content')
            <h1>Lista de Carros </h1>
            <a href="{{ route('carros.create') }}" class="btn btn-primary mb-3">Adicionar Carro</a>
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
</body>

</html>