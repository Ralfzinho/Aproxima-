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
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900">ONGs Disponíveis</h2>
                            <p class="text-gray-600" id="results-count">Mostrando 12 de 250 organizações</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <label class="text-sm text-gray-700">Ordenar por:</label>
                            <select id="sort-select"
                                class="border border-gray-300 rounded-md px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="relevancia">Relevância</option>
                                <option value="nome">Nome A-Z</option>
                                <option value="localizacao">Localização</option>
                                <option value="causa">Causa</option>
                            </select>
                        </div>
                    </div>

                    <div id="ongs-grid" class="grid md:grid-cols-2 gap-6">
                        <!-- ONG Card 1 -->
                        <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden" data-causa="meio-ambiente"
                            data-regiao="sudeste" data-tipo="voluntariado,doacao">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="bg-green-100 rounded-full p-3 mr-4">
                                            <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-.5-11.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-4.5 7h9v-2h-9v2z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">Água para Todos</h3>
                                            <p class="text-sm text-gray-600">São Paulo, SP</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600">4.8</span>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 text-sm">
                                    Trabalhamos para garantir acesso à água potável em comunidades rurais e periféricas,
                                    construindo poços e sistemas de tratamento sustentáveis.
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag tag-meio-ambiente">Meio Ambiente</span>
                                    <span class="tag tag-saude">Saúde</span>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                    <span class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Verificada
                                    </span>
                                    <span>45 voluntários ativos</span>
                                </div>

                                <div class="flex space-x-3">
                                    <button
                                        class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                                        Ver Perfil
                                    </button>
                                    <button
                                        class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                                        Contatar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- ONG Card 2 -->
                        <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden" data-causa="educacao"
                            data-regiao="sudeste" data-tipo="voluntariado,mentoria">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="bg-blue-100 rounded-full p-3 mr-4">
                                            <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">Educação para Todos</h3>
                                            <p class="text-sm text-gray-600">Rio de Janeiro, RJ</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600">4.9</span>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 text-sm">
                                    Promovemos acesso à educação de qualidade para crianças e jovens em situação de
                                    vulnerabilidade através de reforço escolar e atividades complementares.
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag tag-educacao">Educação</span>
                                    <span class="tag tag-direitos-humanos">Direitos Humanos</span>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                    <span class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Verificada
                                    </span>
                                    <span>78 voluntários ativos</span>
                                </div>

                                <div class="flex space-x-3">
                                    <button
                                        class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                                        Ver Perfil
                                    </button>
                                    <button
                                        class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                                        Contatar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- ONG Card 3 -->
                        <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden" data-causa="animais"
                            data-regiao="sul" data-tipo="voluntariado,doacao">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="bg-yellow-100 rounded-full p-3 mr-4">
                                            <svg class="h-8 w-8 text-yellow-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M4.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">Patas Felizes</h3>
                                            <p class="text-sm text-gray-600">Curitiba, PR</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600">4.7</span>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 text-sm">
                                    Resgatamos, cuidamos e encontramos lares para animais abandonados ou em situação de
                                    risco. Também promovemos campanhas de conscientização.
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag tag-animais">Animais</span>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                    <span class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Verificada
                                    </span>
                                    <span>32 voluntários ativos</span>
                                </div>

                                <div class="flex space-x-3">
                                    <button
                                        class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                                        Ver Perfil
                                    </button>
                                    <button
                                        class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                                        Contatar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- ONG Card 4 -->
                        <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden" data-causa="saude"
                            data-regiao="nordeste" data-tipo="voluntariado,servicos">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="bg-pink-100 rounded-full p-3 mr-4">
                                            <svg class="h-8 w-8 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">Saúde em Ação</h3>
                                            <p class="text-sm text-gray-600">Salvador, BA</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600">4.6</span>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 text-sm">
                                    Levamos atendimento médico básico e campanhas de prevenção para comunidades
                                    carentes, focando em saúde preventiva e educação sanitária.
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag tag-saude">Saúde</span>
                                    <span class="tag tag-direitos-humanos">Direitos Humanos</span>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                    <span class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Verificada
                                    </span>
                                    <span>56 voluntários ativos</span>
                                </div>

                                <div class="flex space-x-3">
                                    <button
                                        class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                                        Ver Perfil
                                    </button>
                                    <button
                                        class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                                        Contatar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- ONG Card 5 -->
                        <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden" data-causa="cultura"
                            data-regiao="centro-oeste" data-tipo="voluntariado,mentoria">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="bg-red-100 rounded-full p-3 mr-4">
                                            <svg class="h-8 w-8 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">Arte & Cultura Popular</h3>
                                            <p class="text-sm text-gray-600">Brasília, DF</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600">4.5</span>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 text-sm">
                                    Promovemos a cultura brasileira através de oficinas de arte, música e dança para
                                    jovens em comunidades periféricas, valorizando talentos locais.
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag tag-cultura">Cultura</span>
                                    <span class="tag tag-educacao">Educação</span>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                    <span class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Verificada
                                    </span>
                                    <span>23 voluntários ativos</span>
                                </div>

                                <div class="flex space-x-3">
                                    <button
                                        class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                                        Ver Perfil
                                    </button>
                                    <button
                                        class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                                        Contatar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- ONG Card 6 -->
                        <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden"
                            data-causa="direitos-humanos" data-regiao="norte" data-tipo="voluntariado,servicos">
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex items-center">
                                        <div class="bg-purple-100 rounded-full p-3 mr-4">
                                            <svg class="h-8 w-8 text-purple-600" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="text-xl font-bold text-gray-900">Justiça & Cidadania</h3>
                                            <p class="text-sm text-gray-600">Manaus, AM</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-yellow-400">
                                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="ml-1 text-sm text-gray-600">4.8</span>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 text-sm">
                                    Oferecemos assistência jurídica gratuita e promovemos a defesa dos direitos humanos,
                                    especialmente para populações vulneráveis e minorias.
                                </p>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="tag tag-direitos-humanos">Direitos Humanos</span>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                                    <span class="flex items-center">
                                        <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Verificada
                                    </span>
                                    <span>19 voluntários ativos</span>
                                </div>

                                <div class="flex space-x-3">
                                    <button
                                        class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                                        Ver Perfil
                                    </button>
                                    <button
                                        class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                                        Contatar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <button class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700 disabled:opacity-50"
                                disabled>
                                Anterior
                            </button>
                            <button class="px-3 py-2 text-sm bg-blue-600 text-white rounded-md">1</button>
                            <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900">2</button>
                            <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900">3</button>
                            <span class="px-3 py-2 text-sm text-gray-500">...</span>
                            <button class="px-3 py-2 text-sm text-gray-700 hover:text-gray-900">21</button>
                            <button class="px-3 py-2 text-sm text-gray-500 hover:text-gray-700">
                                Próximo
                            </button>
                        </nav>
                    </div>
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
</body>
<script src="{{ asset('js/ongfiltro.js') }}"></script>

</html>