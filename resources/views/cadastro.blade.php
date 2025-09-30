<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ conectando você a quem precisa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>

<body>
    @include('partials.header')
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Main Content -->
    <div class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-bold text-white mb-6">Bem-vindo ao Aproxima+ </h1>
                <p class="text-xl text-blue-100 mb-4">A plataforma que conecta voluntários e ONGs</p>
                <p class="text-lg text-blue-200">Escolha como você quer participar dessa rede de transformação social
                </p>
            </div>

            <!-- Profile Selection Cards -->
            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto mb-12">
                <!-- Volunteer Card -->
                <div class="profile-card border-2 border-gray-200 rounded-2xl p-8 text-center" data-type="volunteer">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-green-600 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-8">
                        <svg class="h-12 w-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Sou Voluntário</h3>
                    <p class="text-gray-600 mb-8 text-lg">Quero doar meu tempo, habilidades ou recursos para causas
                        sociais que fazem a diferença</p>

                    <div class="space-y-4 mb-8">
                        <div class="feature-item flex items-center text-left">
                            <div class="bg-green-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Encontrar oportunidades de voluntariado
                                personalizadas</span>
                        </div>

                        <div class="feature-item flex items-center text-left">
                            <div class="bg-blue-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Conectar-se com ONGs que precisam das suas
                                habilidades</span>
                        </div>

                        <div class="feature-item flex items-center text-left">
                            <div class="bg-green-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Acompanhar o impacto das suas ações
                                voluntárias</span>
                        </div>

                        <div class="feature-item flex items-center text-left">
                            <div class="bg-yellow-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Participar de uma comunidade engajada</span>
                        </div>
                    </div>

                    <a href="{{ route(name: 'cadastro_voluntario') }}"
                        class="cta-button w-full bg-gradient-to-r from-green-600 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:from-green-700 hover:to-teal-700">
                        Cadastar como Voluntário
                    </a>
                </div>

                <!-- NGO Card -->
                <div class="profile-card border-2 border-gray-200 rounded-2xl p-8 text-center" data-type="ngo">
                    <div
                        class="bg-gradient-to-br from-green-500 to-blue-600 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-8">
                        <svg class="h-12 w-12 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                        </svg>
                    </div>

                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Sou ONG</h3>
                    <p class="text-gray-600 mb-8 text-lg">Represento uma organização que busca voluntários qualificados
                        e apoio para nossos projetos sociais</p>

                    <div class="space-y-4 mb-8">
                        <div class="feature-item flex items-center text-left">
                            <div class="bg-green-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Encontrar voluntários qualificados e
                                engajados</span>
                        </div>

                        <div class="feature-item flex items-center text-left">
                            <div class="bg-blue-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Divulgar projetos e campanhas para mais
                                pessoas</span>
                        </div>

                        <div class="feature-item flex items-center text-left">
                            <div class="bg-green-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Gerenciar equipe de voluntários de forma
                                eficiente</span>
                        </div>

                        <div class="feature-item flex items-center text-left">
                            <div class="bg-yellow-100 rounded-full p-2 mr-4 flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Amplificar o alcance das suas causas</span>
                        </div>
                    </div>

                    <a href="{{ route(name: 'cadastro_ong') }}"
                        class="cta-button w-full bg-gradient-to-r from-green-600 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:from-green-700 hover:to-teal-700">
                        Cadastar como ONG
                    </a>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="text-center">
                <div class="bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg rounded-2xl p-8 max-w-4xl mx-auto">
                    <h2 class="text-2xl font-bold text-white mb-4">Por que escolher o Aproxima+ ?</h2>
                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div>
                            <div
                                class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">Conexões Inteligentes</h3>
                            <p class="text-blue-100">Algoritmo que conecta voluntários e ONGs com base em interesses e
                                habilidades</p>
                        </div>

                        <div>
                            <div
                                class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">Impacto Mensurável</h3>
                            <p class="text-blue-100">Acompanhe e meça o impacto real das ações voluntárias na
                                comunidade</p>
                        </div>

                        <div>
                            <div
                                class="bg-white bg-opacity-20 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                                <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2">Comunidade Ativa</h3>
                            <p class="text-blue-100">Faça parte de uma rede engajada de pessoas que querem transformar
                                o mundo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Card selection interaction
        document.querySelectorAll('.profile-card').forEach(card => {
            card.addEventListener('click', function () {
                // Remove selected class from all cards
                document.querySelectorAll('.profile-card').forEach(c => c.classList.remove('selected'));
                // Add selected class to clicked card
                this.classList.add('selected');
            });
        });

        // Add some interactive animations
        function animateCards(selector) {
            const cards = document.querySelectorAll(selector);
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';

                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });
        }

        document.addEventListener('DOMContentLoaded', () => animateCards('.profile-card'));
    </script>
</body>

</html>