<body>
    <div class="container">
        <h1>Nova Ajuda</h1>
        <form action="{{ route('ajudas.store') }}" method="POST">
            <!-- Token CSRF para proteção contra ataques CSRF -->
             @csrf
            <div class="form-group">
                <label for="nome">Nome da Ajuda:</label>
                <input type="text" name="nome">
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('ajudas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>