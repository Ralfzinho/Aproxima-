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
                <h1 class="text-xl font-semibold text-gray-800 mb-6 text-center">Editar causa</h1>

                <form action="{{ route('causas.update', $causa->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700 mb-2">Nome da causa:</label>
                        <input type="text" name="nome" value="{{ old('nome', $causa->nome) }}"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>
                    <div class="flex space-x-3">
                        <button type="submit"
                            class="w-full btn-primary text-white py-3 px-4 rounded-lg font-semibold transition">Atualizar
                        </button>
                        <a href="{{ route('causas.index') }}"
                            class="w-full btn-secondary text-white py-3 px-4 rounded-lg font-semibold transition bg-gray-400 hover:bg-gray-500 text-center"">Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
     @include('partials.footer')
</body>