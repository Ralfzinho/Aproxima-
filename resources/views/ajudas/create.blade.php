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
    <main class="flex justify-center items-start p-20">
        <div class="lg:col-span-1 w-full max-w-md">
            <div class="admin-card rounded-none p-6 border border-gray-300 shadow-lg h-full">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Nova Ajuda</h2>

                <form action="{{ route('ajudas.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome da Ajuda</label>
                        <input type="text" name="nome" id="nome" placeholder="Ex: Consultoria"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>

                    <div>
                        <label for="descricao" class="block text-sm font-medium text-gray-700 mb-2">Descrição</label>
                        <textarea name="descricao" id="descricao" rows="3" placeholder="Descreva esta ajuda..."
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required></textarea>
                    </div>

                    <!-- Preview (opcional) -->
                    <div class="border-t pt-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Preview</label>
                        <div id="ajuda-preview" class="flex items-center p-3 bg-gray-50 rounded-lg">
                            <div class="icon-preview bg-blue-100 text-blue-600 mr-3">
                                📌
                            </div>
                            <div>
                                <div class="font-medium text-gray-800">Nome da Ajuda</div>
                                <div class="text-sm text-gray-600">Descrição aparecerá aqui</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-3">
                        <button type="submit"
                            class="w-full btn-primary text-white py-3 px-4 rounded-lg font-semibold transition">
                            Adicionar Ajuda
                        </button>
                        <a href="{{ route('ajudas.index') }}"
                            class="w-full btn-secondary text-white py-3 px-4 rounded-lg font-semibold transition bg-gray-400 hover:bg-gray-500 text-center">
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>