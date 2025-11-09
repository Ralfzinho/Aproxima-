<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.head')
    @livewireStyles
</head>

<body class="min-h-full flex items-center justify-center p-4">
    <!-- Formas flutuantes de fundo -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Container principal -->
    <div class="w-full max-w-md relative z-10">
        <!-- Card de Login -->
        <div class="login-card rounded-2xl shadow-2xl p-8 slide-in">
            <!-- Logo e Título -->
            <div class="text-center mb-8">
                <div class="logo-animation inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-500 rounded-2xl mb-4">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewbox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Bem-vindo de volta!</h1>
                <p class="text-gray-600">Entre na sua conta para continuar</p>
            </div>

            <!-- Formulário de Login com Livewire -->
            <livewire:auth.login />

        </div>

        <!-- Informações adicionais -->
        <div class="mt-8 text-center">
            <p class="text-white text-sm opacity-80">Ao fazer login, você concorda com nossos <a href="#" class="underline hover:no-underline">Termos de Uso</a> e <a href="#" class="underline hover:no-underline">Política de Privacidade</a></p>
        </div>
    </div>

    <!-- Modal Genérico para toda a Aplicação -->
    <div id="app-modal" class="modal fixed inset-0 z-50 hidden">
        <div class="modal-overlay fixed inset-0 bg-black bg-opacity-50 transition-opacity"></div>
        <div class="fixed inset-0 flex items-center justify-center p-4">
            <div class="bg-white rounded-xl shadow-2xl max-w-sm w-full transform transition-all">
                <div class="p-6 text-center">
                    <div id="modal-icon-container" class="flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full"></div>
                    <h3 id="modal-title" class="text-lg font-semibold text-gray-900 mb-2"></h3>
                    <p id="modal-message" class="text-gray-600 mb-4"></p>
                    <div id="modal-footer"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="{{ asset('js/modal.js') }}" defer></script>
    @livewireScripts
</body>
</html>
