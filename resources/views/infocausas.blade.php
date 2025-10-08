<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ Causas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/causas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    @include('partials.header')

    {{-- Script para abrir/fechar o menu mobile --}}
    {{-- JS original em public/assets --}}
    <script src="{{ asset('js/app.js') }}"></script>

    <section class="hero-gradient pt-32 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight mb-6">
                Explore as causas que transformam o mundo
            </h1>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Descubra diferentes áreas onde você pode fazer a diferença. Cada causa representa uma oportunidade única
                de impactar positivamente nossa sociedade.
            </p>
            <div class="flex justify-center">
                <button onclick="scrollToSection('causas-principais')"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                    Explorar Causas
                </button>
            </div>
        </div>
    </section>

    <!-- Impact Stats -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Impacto coletivo das causas</h2>
                <p class="text-xl text-gray-600">Juntos, estamos criando mudanças significativas em todo o Brasil</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-xl p-6">
                    <div class="impact-counter" data-target="200">0</div>
                    <p class="text-gray-700 font-medium">Pessoas impactadas</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6">
                    <div class="impact-counter" data-target="50">0</div>
                    <p class="text-gray-700 font-medium">Numero de Doações</p>
                </div>
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6">
                    <div class="impact-counter" data-target="100">0</div>
                    <p class="text-gray-700 font-medium">Projetos em andamento</p>
                </div>
                <div class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl p-6">
                    <div class="impact-counter" data-target="500">0</div>
                    <p class="text-gray-700 font-medium">Conexões solidárias</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Causes -->
    <section id="causas-principais" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Principais causas</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Conheça as áreas onde você pode contribuir e fazer a diferença na vida de milhares de pessoas.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Meio Ambiente -->
                <div class="cause-card cause-meio-ambiente rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('meio-ambiente')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-.5-11.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-4.5 7h9v-2h-9v2z" />
                        </svg>
                        <span class="text-2xl font-bold">42</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Meio Ambiente</h3>
                    <p class="text-green-100 mb-4">Preservação, sustentabilidade e conscientização ambiental</p>
                    <div class="text-sm opacity-90">
                        <p>• Reflorestamento</p>
                        <p>• Limpeza de rios</p>
                        <p>• Educação ambiental</p>
                    </div>
                </div>

                <!-- Educação -->
                <div class="cause-card cause-educacao rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('educacao')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                        </svg>
                        <span class="text-2xl font-bold">56</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Educação</h3>
                    <p class="text-blue-100 mb-4">Acesso à educação de qualidade para todos</p>
                    <div class="text-sm opacity-90">
                        <p>• Reforço escolar</p>
                        <p>• Alfabetização</p>
                        <p>• Cursos profissionalizantes</p>
                    </div>
                </div>

                <!-- Saúde -->
                <div class="cause-card cause-saude rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('saude')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                        </svg>
                        <span class="text-2xl font-bold">38</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Saúde</h3>
                    <p class="text-pink-100 mb-4">Cuidados médicos e bem-estar para comunidades</p>
                    <div class="text-sm opacity-90">
                        <p>• Campanhas de vacinação</p>
                        <p>• Atendimento básico</p>
                        <p>• Prevenção de doenças</p>
                    </div>
                </div>

                <!-- Animais -->
                <div class="cause-card cause-animais rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('animais')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                        <span class="text-2xl font-bold">24</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Animais</h3>
                    <p class="text-yellow-100 mb-4">Proteção e cuidado com animais abandonados</p>
                    <div class="text-sm opacity-90">
                        <p>• Resgate de animais</p>
                        <p>• Adoção responsável</p>
                        <p>• Castração gratuita</p>
                    </div>
                </div>

                <!-- Direitos Humanos -->
                <div class="cause-card cause-direitos-humanos rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('direitos-humanos')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" />
                        </svg>
                        <span class="text-2xl font-bold">31</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Direitos Humanos</h3>
                    <p class="text-purple-100 mb-4">Defesa da dignidade e igualdade</p>
                    <div class="text-sm opacity-90">
                        <p>• Assistência jurídica</p>
                        <p>• Combate à discriminação</p>
                        <p>• Apoio a minorias</p>
                    </div>
                </div>

                <!-- Cultura -->
                <div class="cause-card cause-cultura rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('cultura')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z" />
                        </svg>
                        <span class="text-2xl font-bold">18</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Cultura</h3>
                    <p class="text-red-100 mb-4">Preservação e promoção da cultura brasileira</p>
                    <div class="text-sm opacity-90">
                        <p>• Oficinas de arte</p>
                        <p>• Música e dança</p>
                        <p>• Patrimônio cultural</p>
                    </div>
                </div>

                <!-- Tecnologia -->
                <div class="cause-card cause-tecnologia rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('tecnologia')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20 3H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h3l-1 1v2h12v-2l-1-1h3c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 13H4V5h16v11z" />
                        </svg>
                        <span class="text-2xl font-bold">15</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Tecnologia</h3>
                    <p class="text-cyan-100 mb-4">Inclusão digital e inovação social</p>
                    <div class="text-sm opacity-90">
                        <p>• Cursos de informática</p>
                        <p>• Desenvolvimento web</p>
                        <p>• Robótica educacional</p>
                    </div>
                </div>

                <!-- Esporte -->
                <div class="cause-card cause-esporte rounded-2xl p-8 text-white cursor-pointer"
                    onclick="openCauseModal('esporte')">
                    <div class="flex items-center justify-between mb-6">
                        <svg class="h-12 w-12" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                        <span class="text-2xl font-bold">22</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-3">Esporte</h3>
                    <p class="text-lime-100 mb-4">Promoção da saúde através do esporte</p>
                    <div class="text-sm opacity-90">
                        <p>• Escolinhas esportivas</p>
                        <p>• Atividades físicas</p>
                        <p>• Competições sociais</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured NGOs by Cause -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">ONGs em destaque por causa</h2>
                <p class="text-xl text-gray-600">Organizações que estão fazendo a diferença em suas respectivas áreas
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured ONG 1 -->
                <div class="featured-ong rounded-xl p-6 border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 rounded-full p-3 mr-4">
                            <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-.5-11.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-4.5 7h9v-2h-9v2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Água para Todos</h3>
                            <p class="text-sm text-gray-600">Meio Ambiente</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm mb-4">
                        Garantindo acesso à água potável em comunidades rurais através de tecnologias sustentáveis.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">45 voluntários</span>
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700 transition">
                            Ver Perfil
                        </button>
                    </div>
                </div>

                <!-- Featured ONG 2 -->
                <div class="featured-ong rounded-xl p-6 border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 rounded-full p-3 mr-4">
                            <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Educação para Todos</h3>
                            <p class="text-sm text-gray-600">Educação</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm mb-4">
                        Promovendo educação de qualidade para crianças em situação de vulnerabilidade social.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">78 voluntários</span>
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700 transition">
                            Ver Perfil
                        </button>
                    </div>
                </div>

                <!-- Featured ONG 3 -->
                <div class="featured-ong rounded-xl p-6 border border-gray-200">
                    <div class="flex items-center mb-4">
                        <div class="bg-pink-100 rounded-full p-3 mr-4">
                            <svg class="h-8 w-8 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Saúde em Ação</h3>
                            <p class="text-sm text-gray-600">Saúde</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm mb-4">
                        Levando atendimento médico básico e campanhas de prevenção para comunidades carentes.
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-600">56 voluntários</span>
                        <button
                            class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700 transition">
                            Ver Perfil
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Get Involved -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Como se envolver</h2>
                <p class="text-xl text-gray-600">Diferentes formas de contribuir com as causas que você mais se
                    identifica</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Voluntariado -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Voluntariado</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Doe seu tempo e habilidades para projetos que fazem a diferença na comunidade.
                    </p>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700 transition">
                        Encontrar Oportunidades
                    </button>
                </div>

                <!-- Doações -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Doações</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Contribua financeiramente ou com materiais para apoiar projetos sociais.
                    </p>
                    <button class="bg-green-600 text-white px-4 py-2 rounded-md text-sm hover:bg-green-700 transition">
                        Fazer Doação
                    </button>
                </div>

                <!-- Mentoria -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Mentoria</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Compartilhe seu conhecimento profissional para capacitar pessoas e organizações.
                    </p>
                    <button
                        class="bg-purple-600 text-white px-4 py-2 rounded-md text-sm hover:bg-purple-700 transition">
                        Ser Mentor
                    </button>
                </div>

                <!-- Divulgação -->
                <div class="bg-white rounded-xl p-6 shadow-md text-center">
                    <div class="bg-orange-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg class="h-8 w-8 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.50-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Divulgação</h3>
                    <p class="text-gray-600 text-sm mb-4">
                        Ajude a espalhar a palavra sobre causas importantes em suas redes sociais.
                    </p>
                    <button
                        class="bg-orange-600 text-white px-4 py-2 rounded-md text-sm hover:bg-orange-700 transition">
                        Compartilhar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 hero-gradient">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Encontre sua causa</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Cada pessoa tem uma paixão única. Descubra como você pode usar suas habilidades e interesses para fazer
                a diferença no mundo.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="ONGS.html"
                    class="bg-white text-blue-700 px-8 py-4 rounded-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                    Explorar ONGs
                </a>
                <a href="cadastro.html"
                    class="bg-transparent text-white border-2 border-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transition">
                    Cadastrar ONG
                </a>
            </div>
        </div>
    </section>
    @include('partials.footer')

    <!-- Cause Modal -->
    <div id="cause-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-8">
                <div class="flex justify-between items-start mb-6">
                    <div id="modal-header" class="flex items-center">
                        <!-- Content will be dynamically inserted -->
                    </div>
                    <button onclick="closeCauseModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div id="modal-content">
                    <!-- Content will be dynamically inserted -->
                </div>

                <div class="flex space-x-4 mt-8">
                    <button
                        class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Ver ONGs desta Causa
                    </button>
                    <button
                        class="flex-1 bg-gray-100 text-gray-700 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition">
                        Compartilhar
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>