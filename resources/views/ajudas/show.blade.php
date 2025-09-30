<body>
    <div class="container">
        <h1>Detalhes da Ajuda</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $ajuda->id }}</h5>
                <p class="card-text"><strong>Nome:</strong> {{ $ajuda->nome }}</p>
                <p class="card-text"><strong>Criado em:</strong> {{ $ajuda->created_at->format('d/m/Y H:i') }}</p>
                <p class="card-text"><strong>Última atualização:</strong> {{ $ajuda->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('ajudas.index') }}" class="btn btn-secondary">Voltar</a>
            <a href="{{ route('ajudas.edit', $ajuda->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('ajudas.destroy', $ajuda->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta ajuda?')">
                    Excluir
                </button>
            </form>
        </div>
    </div>
</body>
