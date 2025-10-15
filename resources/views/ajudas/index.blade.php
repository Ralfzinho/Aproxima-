<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ conectando você a quem precisa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/admin_ajuda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @include('partials.header')

    {{-- Scripts (ordem importa: SweetAlert2 -> app.js -> confirm-actions.js) --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/confirm-actions.js') }}"></script>

    <div class="pt-16 flex">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Header da Página -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white mb-2">Gerenciar Tipos de Ajuda</h1>
                <p class="text-green-100">Cadastre e gerencie as categorias de voluntariado disponíveis na plataforma</p>
            </div>

            <!-- Estatísticas Rápidas -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="admin-card p-6 rounded-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Total de Tipos</p>
                            <p class="text-2xl font-bold text-gray-800" id="total-types">
                                {{ trans_choice(':count', ($ajudas instanceof \Illuminate\Pagination\LengthAwarePaginator) ? $ajudas->total() : $ajudas->count(), ['count' => ($ajudas instanceof \Illuminate\Pagination\LengthAwarePaginator) ? $ajudas->total() : $ajudas->count()]) }}
                            </p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg class="h-6 w-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="admin-card p-6 rounded-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Tipos Ativos</p>
                            <p class="text-2xl font-bold text-green-600" id="active-types">7</p>
                        </div>
                        <div class="bg-green-100 p-3 rounded-full">
                            <svg class="h-6 w-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="admin-card p-6 rounded-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Vagas Ativas</p>
                            <p class="text-2xl font-bold text-purple-600">156</p>
                        </div>
                        <div class="bg-purple-100 p-3 rounded-full">
                            <svg class="h-6 w-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="admin-card p-6 rounded-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Mais Popular</p>
                            <p class="text-lg font-bold text-orange-600">Educação</p>
                        </div>
                        <div class="bg-orange-100 p-3 rounded-full">
                            <svg class="h-6 w-6 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <!-- Lista de Ajudas Existentes -->
                <div class="lg:col-span-2">
                    <div class="admin-card rounded-xl p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-semibold text-gray-800">Ajudas Cadastradas</h2>
                            <div class="flex items-center space-x-3">
                                <input type="text" id="search-ajudas" placeholder="Buscar ajudas..."
                                       class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <select id="filter-status"
                                        class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Todos</option>
                                    <option value="active">Ativos</option>
                                    <option value="inactive">Inativos</option>
                                </select>
                            </div>
                        </div>

                        <div id="ajudas-list" class="space-y-4">
                            @forelse ($ajudas as $ajuda)
                                <div class="type-card bg-white border rounded-lg p-4 flex items-center justify-between">
                                    <div>
                                        <div class="font-semibold text-gray-800">{{ $ajuda->nome }}</div>
                                        @if($ajuda->descricao)
                                            <div class="text-sm text-gray-600">{{ $ajuda->descricao }}</div>
                                        @endif
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        {{-- Confirmar antes de ir para a edição --}}
                                        <a href="{{ route('ajudas.edit', $ajuda->id) }}"
                                           class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition"
                                           data-swal-edit
                                           data-title="Abrir edição?"
                                           data-text="Você vai para o formulário de edição."
                                           data-confirm="Ir para edição"
                                           data-cancel="Cancelar">
                                            Editar
                                        </a>

                                        {{-- Confirmar exclusão (DELETE) --}}
                                        <form action="{{ route('ajudas.destroy', $ajuda->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition"
                                                    data-swal-delete
                                                    data-title="Excluir ajuda?"
                                                    data-text="Essa ação não pode ser desfeita."
                                                    data-confirm="Excluir"
                                                    data-cancel="Cancelar">
                                                Excluir
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <div class="text-gray-500">Nenhuma ajuda cadastrada.</div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="admin-card rounded-xl p-6">
                    <a href="{{ route('ajudas.create') }}"
                       class="w-full btn-primary text-white py-3 px-4 rounded-lg font-semibold transition text-center inline-block">
                        Adicionar Nova Ajuda
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Marcadores invisíveis para flash (lidos pelo confirm-actions.js) --}}
    @if(session('success'))
      <div id="flash-success" data-message="{{ session('success') }}" class="hidden"></div>
    @endif
    @if($errors->any())
      <div id="flash-error" data-message="{{ implode(' | ', $errors->all()) }}" class="hidden"></div>
    @endif

    @include('partials.footer')
</body>
</html>
