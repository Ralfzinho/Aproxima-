<body>
    <div class="container">
        <h1>Editar Ajuda</h1>

        <form action="{{ route('ajudas.update', $ajuda->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- necessário para update -->

            <div class="form-group">
                <label for="nome">Nome da Ajuda:</label>
                <input type="text" name="nome" value="{{ old('nome', $ajuda->nome) }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('ajudas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
