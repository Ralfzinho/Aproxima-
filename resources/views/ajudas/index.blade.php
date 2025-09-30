<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ conectando você a quem precisa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/admin_ajuda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    @include('partials.header')
    {{-- Script para abrir/fechar o menu mobile --}}
    {{-- JS original em public/assets --}}
    <script src="{{ asset('js/app.js') }}">

    </script>

    <div class="pt-16 flex">
        <!-- Sidebar -->
        <div class="w-64 min-h-screen bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg">
            <div class="p-6">
                <div class="text-center mb-8">
                    <img class="h-16 w-16 rounded-full mx-auto mb-3"
                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='50' fill='%230051b5'/%3E%3Ctext x='50' y='55' text-anchor='middle' fill='white' font-size='35' font-family='Arial'%3EAD%3C/text%3E%3C/svg%3E"
                        alt="Admin Avatar">
                    <h3 class="text-white font-semibold">Administrador</h3>
                    <p class="text-green-100 text-sm">Painel de Controle</p>
                </div>

                <nav class="space-y-2">
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                        </svg>
                        Dashboard
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        Usuários
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                        </svg>
                        ONGs
                    </a>
                    <a href="#" class="sidebar-item active flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                        </svg>
                        Tipos de Ajuda
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd" />
                        </svg>
                        Vagas
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Relatórios
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-4 py-3 text-white rounded-lg">
                        <svg class="h-5 w-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd" />
                        </svg>
                        Configurações
                    </a>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Header da Página -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-white mb-2">Gerenciar Tipos de Ajuda</h1>
                <p class="text-green-100">Cadastre e gerencie as categorias de voluntariado disponíveis na plataforma
                </p>
            </div>

            <!-- Estatísticas Rápidas -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="admin-card p-6 rounded-xl">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm">Total de Tipos</p>
                            <p class="text-2xl font-bold text-gray-800" id="total-types">8</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <svg class="h-6 w-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
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
                                <path fill-rule="evenodd"
                                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                    clip-rule="evenodd" />
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
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
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
                                        <a href="{{ route('ajudas.edit', $ajuda->id) }}"
                                            class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition">
                                            Editar
                                        </a>
                                        <form action="{{ route('ajudas.destroy', $ajuda->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-2 text-red-600 hover:bg-red-50 rounded-lg transition"
                                                onclick="return confirm('Tem certeza que deseja excluir esta ajuda?')">
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

    @include('partials.footer')
</body>

</html>