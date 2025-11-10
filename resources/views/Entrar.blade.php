<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.head')
    @livewireStyles
</head>

<body class="min-h-screen flex flex-col">
    <!-- Formas flutuantes de fundo -->
    <div class="floating-shapes">
        <div class="shape"></div>   
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Container principal -->
    <main class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-md relative z-10">
            <!-- Card de Login -->
            <div class="login-card rounded-2xl shadow-2xl p-8 slide-in">
                <!-- Logo e Título -->
                <div class="flex items-center justify-center h-28">
                    <img class="max-h-full w-auto" src="{{ asset('img/1.png') }}" alt="Logo Aproxima+">
                </div>
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">Bem-vindo de volta!</h1>
                    <p class="text-gray-600">Entre na sua conta para continuar</p>
                </div>

                <!-- Formulário de Login com Livewire -->
                <livewire:auth.login />

            </div>
    </main>
    <!-- Informações adicionais -->
    <footer class="text-center py-4">
        <p class="text-white text-sm opacity-80">Ao fazer login, você concorda com nossos <a href="#" class="underline hover:no-underline">Termos de Uso</a> e <a href="#" class="underline hover:no-underline">Política de Privacidade</a></p>
    </footer>


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