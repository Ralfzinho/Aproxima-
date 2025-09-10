<body>
    <div class="container">
        <h1>Lista de Ajudas</h1>

        <!-- Mensagem de sucesso -->
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif

        <!-- Botão para criar nova ajuda -->
        <a href="{{ route('ajudas.create') }}" class="btn btn-success mb-3">Nova Ajuda</a>

        <!-- Tabela de listagem -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($ajudas as $ajuda)
                <tr>
                    <td>{{ $ajuda->id }}</td>
                    <td>{{ $ajuda->nome }}</td>
                    <td>
                        <!-- Editar -->
                        <a href="{{ route('ajudas.edit', $ajuda->id) }}" class="btn btn-primary btn-sm">Editar</a>

                        <!-- Excluir -->
                        <form action="{{ route('ajudas.destroy', $ajuda->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Tem certeza que deseja excluir esta ajuda?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Nenhuma ajuda cadastrada.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>