<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aproxima+ - Conectando Voluntários e ONGs</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary-green: #00bc60;
            --primary-blue: #0051b5;
            --green-hover: #00a855;
            --blue-hover: #004299;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-blue) 100%);
            min-height: 100vh;
            overflow: hidden;
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        .floating-animation:nth-child(2) {
            animation-delay: -2s;
        }

        .floating-animation:nth-child(3) {
            animation-delay: -4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-20px) rotate(1deg);
            }

            66% {
                transform: translateY(-10px) rotate(-1deg);
            }
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .btn-primary {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .logo-glow {
            filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.3));
        }

        .text-glow {
            text-shadow: 0 0 30px rgba(255, 255, 255, 0.5);
        }

        .background-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            top: 20%;
            right: 15%;
            animation-delay: -2s;
        }

        .shape:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation-delay: -4s;
        }

        .shape:nth-child(4) {
            bottom: 15%;
            right: 10%;
            animation-delay: -6s;
        }

        .content-container {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body class="flex items-center justify-center">
    <!-- Background Shapes -->
    <div class="background-shapes">
        <div class="shape floating-animation">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none">
                <circle cx="60" cy="60" r="60" fill="white" />
            </svg>
        </div>
        <div class="shape floating-animation">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
                <rect width="80" height="80" rx="20" fill="white" />
            </svg>
        </div>
        <div class="shape floating-animation">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none">
                <polygon points="50,0 100,86.6 0,86.6" fill="white" />
            </svg>
        </div>
        <div class="shape floating-animation">
            <svg width="90" height="90" viewBox="0 0 90 90" fill="none">
                <path d="M45 0L55.3 34.7L90 45L55.3 55.3L45 90L34.7 55.3L0 45L34.7 34.7L45 0Z" fill="white" />
            </svg>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content-container text-center px-8">
        <!-- Logo e Título -->
        <div class="mb-12">
            <!-- Logo Icon -->
            <div class="flex justify-center mb-8">
                <div class="logo-glow pulse-animation">
                    <img class="h-32 w-32" src="{{ asset('img/logo-aproxima.png') }}" alt="Logo">

                </div>
            </div>

            <!-- Título Principal -->
            <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-4 text-glow">
                Aproxima<span class="text-green-200">+</span>
            </h1>

            <!-- Subtítulo -->
            <p class="text-xl md:text-2xl text-green-100 font-light mb-2">
                Conectando Voluntários e ONGs
            </p>

            <!-- Descrição -->
            <p class="text-lg text-white opacity-90 max-w-2xl mx-auto leading-relaxed">
                A plataforma que aproxima pessoas que querem fazer a diferença com organizações que transformam o mundo
            </p>
        </div>

        <!-- Botão Principal -->
        <div class="mb-8">
            <button onclick="goToMainPage()"
                class="btn-primary text-white text-xl font-semibold px-12 py-4 rounded-full inline-flex items-center space-x-3 group">
                <span>Entrar na Plataforma</span>
                <svg class="h-6 w-6 transform group-hover:translate-x-1 transition-transform" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <!-- Estatísticas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2">500+</div>
                <div class="text-green-100">ONGs Cadastradas</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2">2.5K+</div>
                <div class="text-green-100">Voluntários Ativos</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-white mb-2">1.2K+</div>
                <div class="text-green-100">Projetos Realizados</div>
            </div>
        </div>

        <!-- Indicadores de Recursos -->
        <div class="mt-16 flex justify-center space-x-8 text-white opacity-75">
            <div class="flex items-center space-x-2">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-sm">100% Gratuito</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-sm">Seguro e Confiável</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                </svg>
                <span class="text-sm">Impacto Real</span>
            </div>
        </div>
    </div>

    <script>
        function goToMainPage() {
            // Adiciona efeito de loading no botão
            const button = event.target.closest('button');
            const originalContent = button.innerHTML;

            button.innerHTML = `
                <svg class="animate-spin h-6 w-6 text-white" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Carregando...</span>
            `;

            button.disabled = true;

            // Simula carregamento e depois redireciona
            setTimeout(() => {
                // Aqui você redirecionaria para a página principal
                 window.location.href = "{{ route(name: 'inicio') }}";
                button.innerHTML = originalContent;
                button.disabled = false;
            }, 2000);
        }

        // Adiciona efeitos de teclado
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                goToMainPage();
            }
        });

        // Efeito de parallax suave no mouse
        document.addEventListener('mousemove', function (e) {
            const shapes = document.querySelectorAll('.shape');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;

            shapes.forEach((shape, index) => {
                const speed = (index + 1) * 0.5;
                const xPos = (x - 0.5) * speed;
                const yPos = (y - 0.5) * speed;

                shape.style.transform = `translate(${xPos}px, ${yPos}px)`;
            });
        });

        // Animação de entrada da página
        document.addEventListener('DOMContentLoaded', function () {
            const content = document.querySelector('.content-container');
            content.style.opacity = '0';
            content.style.transform = 'translateY(30px)';

            setTimeout(() => {
                content.style.transition = 'all 1s ease-out';
                content.style.opacity = '1';
                content.style.transform = 'translateY(0)';
            }, 100);
        });
    </script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'971dce9465c51b33',t:'MTc1NTY1MDA4Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>

</html>