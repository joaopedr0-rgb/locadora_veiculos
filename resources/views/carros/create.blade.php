
<div class = "card mb-4">
    <div class="card-header">
        <h2>Novo Carro</h2>
        @if (@$errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form action="{{ route('carros.store')}}" method="POST">
        @csrf
    </form>
</div>
<div class ="card-body">
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
        <div class ="mb-3">
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
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>
        <div class="mb-3">
            <label for="preco_diaria" class="form-label">Preço Diária</label>
            <input type="number" step="0.01" class="form-control" id="preco_diaria" name="preco_diaria" required>
        </div>
    </form>
</div>