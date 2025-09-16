<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ Como Funciona</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/comofunciona.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    @include('partials.header')

    {{-- Script para abrir/fechar o menu mobile --}}
    {{-- JS original em public/assets --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Hero Section -->
    <section class="hero-gradient pt-32 pb-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                Como o Aproxima+ funciona
            </h1>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Descubra como nossa plataforma conecta pessoas que querem ajudar com organizações que precisam de apoio.
                Um processo simples e eficiente para transformar vidas.
            </p>
            <div class="flex justify-center space-x-4">
                <button onclick="scrollToSection('para-voluntarios')"
                    class="bg-white text-blue-700 px-6 py-3 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                    Para Voluntários
                </button>
                <button onclick="scrollToSection('para-ongs')"
                    class="bg-transparent text-white border-2 border-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transition">
                    Para ONGs
                </button>
            </div>
        </div>
    </section>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Uma plataforma, duas perspectivas</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    O Aproxima+ funciona como uma ponte entre quem quer ajudar e quem precisa de ajuda, criando conexões
                    significativas e duradouras.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="bg-blue-50 rounded-2xl p-8">
                        <div class="flex items-center mb-6">
                            <div class="bg-blue-600 rounded-full p-3 mr-4">
                                <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Para Voluntários</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Encontre ONGs que combinam com seus valores</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Filtre por localização, causa e tipo de ajuda</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Conecte-se diretamente com as organizações</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Acompanhe o impacto da sua contribuição</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="bg-green-50 rounded-2xl p-8">
                        <div class="flex items-center mb-6">
                            <div class="bg-green-600 rounded-full p-3 mr-4">
                                <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Para ONGs</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Crie um perfil completo da sua organização</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Publique oportunidades de voluntariado</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Receba candidaturas de voluntários qualificados</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-6 w-6 text-green-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-700">Gerencie sua equipe de voluntários</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- For Volunteers Section -->
    <section id="para-voluntarios" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Para Voluntários</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Siga estes passos simples para encontrar a ONG perfeita e começar a fazer a diferença hoje mesmo.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="step-card bg-white rounded-xl p-6 shadow-md text-center">
                        <div
                            class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 h-full">
                            <span class="text-2xl font-bold text-blue-600">1</span>
                        </div>
                        <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Descubra</h3>
                        <p class="text-gray-600 text-sm">
                            Use nossos filtros para encontrar ONGs por causa, localização ou tipo de ajuda que você quer
                            oferecer.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="step-card bg-white rounded-xl p-6 shadow-md text-center">
                        <div
                            class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 h-full">
                            <span class="text-2xl font-bold text-blue-600">2</span>
                        </div>
                        <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Explore</h3>
                        <p class="text-gray-600 text-sm">
                            Veja os perfis detalhados das ONGs, seus projetos, impacto e oportunidades de voluntariado
                            disponíveis.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="step-card bg-white rounded-xl p-6 shadow-md text-center">
                        <div
                            class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 h-full">
                            <span class="text-2xl font-bold text-blue-600">3</span>
                        </div>
                        <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Conecte-se</h3>
                        <p class="text-gray-600 text-sm">
                            Entre em contato diretamente com as ONGs através da plataforma e candidate-se às
                            oportunidades.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="step-card bg-white rounded-xl p-6 shadow-md text-center">
                        <div
                            class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6 h-full">
                            <span class="text-2xl font-bold text-blue-600">4</span>
                        </div>
                        <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Contribua</h3>
                        <p class="text-gray-600 text-sm">
                            Comece a fazer a diferença! Doe seu tempo, habilidades ou recursos e acompanhe seu impacto.
                        </p>
                    </div>
                </div>

                <!-- linha4 -->
                <div class="process-step"></div>
            </div>
        </div>
    </section>

    <!-- For NGOs Section -->
    <section id="para-ongs" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Para ONGs</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Amplifique o alcance da sua organização e encontre voluntários comprometidos com sua causa.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="process-step">
                    <div
                        class="step-card bg-white rounded-xl p-6 shadow-md text-center border-2 border-green-100 h-full">
                        <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-green-600">1</span>
                        </div>
                        <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Cadastre-se</h3>
                        <p class="text-gray-600 text-sm">
                            Crie um perfil completo da sua ONG com missão, visão, projetos e necessidades de
                            voluntariado.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div
                        class="step-card bg-white rounded-xl p-6 shadow-md text-center border-2 border-green-100 h-full">
                        <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-green-600">2</span>
                        </div>
                        <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Publique</h3>
                        <p class="text-gray-600 text-sm">
                            Crie oportunidades de voluntariado detalhadas especificando habilidades, tempo e localização
                            necessários.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div
                        class="step-card bg-white rounded-xl p-6 shadow-md text-center border-2 border-green-100 h-full">
                        <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-green-600">3</span>
                        </div>
                        <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Selecione</h3>
                        <p class="text-gray-600 text-sm">
                            Receba candidaturas de voluntários interessados e selecione aqueles que melhor se encaixam.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div
                        class="step-card bg-white rounded-xl p-6 shadow-md text-center border-2 border-green-100 h-full">
                        <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-green-600">4</span>
                        </div>
                        <div class="bg-green-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-4">
                            <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Gerencie</h3>
                        <p class="text-gray-600 text-sm">
                            Use nossas ferramentas para gerenciar voluntários, projetos e acompanhar o impacto gerado.
                        </p>
                    </div>
                </div>
                <div class="process-step"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Recursos da plataforma</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ferramentas poderosas para facilitar a conexão entre voluntários e ONGs.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="feature-icon rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Busca Inteligente</h3>
                    <p class="text-gray-600">
                        Filtros avançados por localização, causa, habilidades necessárias e disponibilidade de tempo.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="feature-icon rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Verificação</h3>
                    <p class="text-gray-600">
                        Todas as ONGs passam por processo de verificação para garantir legitimidade e transparência.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="feature-icon rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Comunicação Direta</h3>
                    <p class="text-gray-600">
                        Sistema de mensagens integrado para facilitar o contato entre voluntários e organizações.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="feature-icon rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 11H7v6h2v-6zm4 0h-2v6h2v-6zm4 0h-2v6h2v-6zm2.5-9H19V1h-2v1H7V1H5v1H3.5C2.67 2 2 2.67 2 3.5v15C2 19.33 2.67 20 3.5 20h17c.83 0 1.5-.67 1.5-1.5v-15C22 2.67 21.33 2 20.5 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Gestão de Projetos</h3>
                    <p class="text-gray-600">
                        Ferramentas para ONGs gerenciarem projetos, voluntários e acompanharem o progresso das
                        atividades.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="feature-icon rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Relatórios de Impacto</h3>
                    <p class="text-gray-600">
                        Acompanhe métricas de impacto, horas de voluntariado e resultados dos projetos em tempo real.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <div class="feature-icon rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Sistema de Avaliações</h3>
                    <p class="text-gray-600">
                        Voluntários e ONGs podem se avaliar mutuamente, criando um ambiente de confiança e qualidade.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Histórias de sucesso</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Veja como nossa plataforma tem transformado vidas e fortalecido organizações.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Success Story 1 -->
                <div class="bg-blue-50 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-600 rounded-full p-3 mr-4">
                            <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Ana Carolina</h3>
                            <p class="text-blue-600">Voluntária há 8 meses</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 mb-6">
                        "Sempre quis ajudar, mas não sabia por onde começar. O Aproxima+ me conectou com uma ONG de
                        educação infantil que combina perfeitamente com minha formação em pedagogia. Hoje coordeno um
                        projeto que já impactou mais de 50 crianças."
                    </blockquote>
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        São Paulo, SP
                    </div>
                </div>

                <!-- Success Story 2 -->
                <div class="bg-green-50 rounded-2xl p-8">
                    <div class="flex items-center mb-6">
                        <div class="bg-green-600 rounded-full p-3 mr-4">
                            <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Instituto Verde Vida</h3>
                            <p class="text-green-600">ONG de meio ambiente</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 mb-6">
                        "Em 6 meses no Aproxima+, aumentamos nossa equipe de voluntários em 300%. Encontramos pessoas
                        realmente engajadas com nossa causa ambiental, incluindo especialistas em sustentabilidade que
                        nos ajudaram a expandir nossos projetos."
                    </blockquote>
                    <div class="flex items-center text-sm text-gray-600">
                        <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd" />
                        </svg>
                        Rio de Janeiro, RJ
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Perguntas frequentes</h2>
                <p class="text-xl text-gray-600">
                    Tire suas dúvidas sobre como funciona o Aproxima+.
                </p>
            </div>

            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(1)">
                        <span class="text-lg font-semibold text-gray-900">É gratuito usar o Aproxima+?</span>
                        <svg id="faq-icon-1" class="h-6 w-6 text-gray-500 transform transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-content-1" class="hidden px-6 pb-4">
                        <p class="text-gray-600">
                            Sim! O Aproxima+ é completamente gratuito tanto para voluntários quanto para ONGs. Nossa
                            missão é facilitar conexões sem barreiras financeiras.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(2)">
                        <span class="text-lg font-semibold text-gray-900">Como as ONGs são verificadas?</span>
                        <svg id="faq-icon-2" class="h-6 w-6 text-gray-500 transform transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-content-2" class="hidden px-6 pb-4">
                        <p class="text-gray-600">
                            Verificamos documentos legais, CNPJ, estatuto social e realizamos entrevistas com
                            representantes. Também checamos referências e histórico de atividades da organização.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(3)">
                        <span class="text-lg font-semibold text-gray-900">Posso voluntariar remotamente?</span>
                        <svg id="faq-icon-3" class="h-6 w-6 text-gray-500 transform transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-content-3" class="hidden px-6 pb-4">
                        <p class="text-gray-600">
                            Sim! Muitas ONGs oferecem oportunidades de voluntariado remoto, como design gráfico,
                            marketing digital, consultoria, tradução e outras atividades que podem ser feitas online.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(4)">
                        <span class="text-lg font-semibold text-gray-900">Quanto tempo preciso dedicar?</span>
                        <svg id="faq-icon-4" class="h-6 w-6 text-gray-500 transform transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-content-4" class="hidden px-6 pb-4">
                        <p class="text-gray-600">
                            Varia conforme a oportunidade. Temos desde ações pontuais de algumas horas até compromissos
                            de longo prazo. Você pode filtrar por disponibilidade de tempo na busca.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-lg shadow-md">
                    <button
                        class="faq-button w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                        onclick="toggleFAQ(5)">
                        <span class="text-lg font-semibold text-gray-900">E se eu não tiver experiência?</span>
                        <svg id="faq-icon-5" class="h-6 w-6 text-gray-500 transform transition-transform" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-content-5" class="hidden px-6 pb-4">
                        <p class="text-gray-600">
                            Não se preocupe! Muitas ONGs oferecem treinamento e têm oportunidades para iniciantes. O
                            importante é ter vontade de ajudar e aprender.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // FAQ Toggle
            function toggleFAQ(index) {
                const content = document.getElementById(`faq-content-${index}`);
                const icon = document.getElementById(`faq-icon-${index}`);

                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            }
        </script>
    </section>

    <!-- CTA Section -->
    <section class="py-16 hero-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Pronto para começar?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Junte-se a milhares de pessoas que já estão fazendo a diferença. Encontre sua causa hoje mesmo.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="ONGS.html"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                    Encontrar ONGs
                </a>
                <a href="cadastro.html"
                    class="bg-transparent text-white border-2 border-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transition">
                    Cadastrar minha ONG
                </a>
            </div>
        </div>
    </section>
    {{-- Footer --}}
    @include('partials.footer')
</body>

</html>