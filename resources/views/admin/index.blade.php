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

    <div class="pt-16 flex">
        @include('partials.sidebar')
    </div>
    @include('partials.footer')
</body>

</html>