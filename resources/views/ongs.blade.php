<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ ONG</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="../assets/css/ongs.css">
    @livewireStyles
</head>

<body>
    @include('partials.header')

    {{-- Script para abrir/fechar o menu mobile --}}
    {{-- JS original em public/assets --}}
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Hero Section -->
    <section class="hero-gradient pt-32 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                Descubra ONGs incríveis
            </h1>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Explore organizações verificadas que estão fazendo a diferença em suas comunidades. Encontre a causa
                perfeita para você.
            </p>

            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto">
                <div class="relative">
                    <input type="text" id="search-input" placeholder="Buscar por nome, causa ou localização..."
                        class="w-full px-6 py-4 pr-12 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white">
                    <button
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-8 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-2xl font-bold text-blue-600" id="total-ongs">3</p>
                    <p class="text-gray-600 text-sm">Estados representados</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-blue-600">+15</p>
                    <p class="text-gray-600 text-sm">Novas ONGs</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-blue-600">+15.000</p>
                    <p class="text-gray-600 text-sm">Buscas realizadas</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-blue-600">+12</p>
                    <p class="text-gray-600 text-sm">Tipos de ajuda oferecida</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filters -->
                <div class="lg:w-1/4">
                    <div class="bg-white rounded-xl shadow-md p-6 filter-sidebar">
                        <h3 class="text-lg font-semibold text-gray-900 mb-6">Filtros</h3>

                        <!-- Causa Filter -->
                        <div class="mb-6">
                            <h4 class="font-medium text-gray-900 mb-3">Causa</h4>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="causa"
                                        data-value="meio-ambiente"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Meio Ambiente</span>
                                    <span class="ml-auto text-xs text-gray-500">(42)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="causa"
                                        data-value="educacao"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Educação</span>
                                    <span class="ml-auto text-xs text-gray-500">(56)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="causa"
                                        data-value="saude"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Saúde</span>
                                    <span class="ml-auto text-xs text-gray-500">(38)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="causa"
                                        data-value="animais"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Animais</span>
                                    <span class="ml-auto text-xs text-gray-500">(24)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="causa"
                                        data-value="direitos-humanos"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Direitos Humanos</span>
                                    <span class="ml-auto text-xs text-gray-500">(31)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="causa"
                                        data-value="cultura"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Cultura</span>
                                    <span class="ml-auto text-xs text-gray-500">(18)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Região Filter -->
                        <div class="mb-6">
                            <h4 class="font-medium text-gray-900 mb-3">Região</h4>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="regiao"
                                        data-value="sudeste"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Sudeste</span>
                                    <span class="ml-auto text-xs text-gray-500">(89)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="regiao"
                                        data-value="nordeste"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Nordeste</span>
                                    <span class="ml-auto text-xs text-gray-500">(67)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="regiao" data-value="sul"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Sul</span>
                                    <span class="ml-auto text-xs text-gray-500">(45)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="regiao"
                                        data-value="centro-oeste"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Centro-Oeste</span>
                                    <span class="ml-auto text-xs text-gray-500">(28)</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="regiao"
                                        data-value="norte"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Norte</span>
                                    <span class="ml-auto text-xs text-gray-500">(21)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Tipo de Ajuda Filter -->
                        <div class="mb-6">
                            <h4 class="font-medium text-gray-900 mb-3">Tipo de Ajuda</h4>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="tipo"
                                        data-value="voluntariado"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Voluntariado</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="tipo"
                                        data-value="doacao"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Doação</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="tipo"
                                        data-value="mentoria"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Mentoria</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="filter-checkbox" data-filter="tipo"
                                        data-value="servicos"
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    <span class="ml-2 text-sm text-gray-700">Serviços Profissionais</span>
                                </label>
                            </div>
                        </div>

                        <button onclick="clearFilters()"
                            class="w-full bg-gray-100 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-200 transition">
                            Limpar Filtros
                        </button>
                    </div>
                </div>

                <!-- ONGs Grid -->
                <div class="lg:w-3/4">
                    <livewire:listar-ongs />
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 hero-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Não encontrou o que procurava?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Cadastre sua ONG na nossa plataforma ou entre em contato conosco para sugestões de novas organizações.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="cadastro.html"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                    Cadastrar minha ONG
                </a>
                <a href="contato.html"
                    class="bg-transparent text-white border-2 border-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transition">
                    Sugerir ONG
                </a>
            </div>
        </div>
    </section>
    {{-- Footer --}}
    @include('partials.footer')
    @livewireScripts
</body>
<script src="{{ asset('js/ongfiltro.js') }}"></script>

</html>
