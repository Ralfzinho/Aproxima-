{{-- resources/views/partials/nav.blade.php --}}
<nav class="bg-white bg-opacity-90 backdrop-filter backdrop-blur-lg shadow-sm fixed w-full z-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      {{-- Logo + nome --}}
      <div class="flex items-center">
        <img class="h-8 w-8" src="{{ asset('img/logo-aproxima.png') }}" alt="Logo Aproxima+">
        <span class="ml-2 text-xl font-bold text-blue-700">Aproxima</span>
        <span class="ml-1 text-xl font-bold text-green-600">+</span>
      </div>

      {{-- Links de navegação (desktop) --}}
      <div class="hidden md:flex items-center space-x-8">
        <a href="{{ route('inicio') }}" class="text-blue-700 hover:text-green-600 px-3 py-2 font-medium">Início</a>
        <a href="{{ route('como-funciona') }}" class="text-blue-700 hover:text-green-600 px-3 py-2 font-medium">Como Funciona</a>
        <a href="{{ route('ongs') }}" class="text-blue-700 hover:text-green-600 px-3 py-2 font-medium">ONGs</a>
        <a href="{{ route('causas.index') }}" class="text-blue-700 hover:text-green-600 px-3 py-2 font-medium">Causas</a>
        <a href="{{ route('inicio') }}" class="text-blue-700 hover:text-green-600 px-3 py-2 font-medium">Contato</a>
      </div>

      {{-- Botões de ação (desktop) --}}
      <div class="hidden md:flex items-center space-x-3">
        <a href="{{ route('inicio') }}" class="bg-white text-green-600 border border-green-600 px-4 py-2 rounded-md font-medium hover:bg-green-50 transition">Entrar</a>
        <a href="{{ route('cadastro') }}" class="bg-green-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition">Cadastrar</a>
      </div>

      {{-- Menu hambúrguer (mobile) --}}
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-700 focus:outline-none">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  {{-- Menu mobile --}}
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    <div class="px-4 pt-4 pb-3 space-y-1">
      <a href="{{ route('inicio') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Início</a>
      <a href="{{ route('como-funciona') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Como Funciona</a>
      <a href="{{ route('ongs') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">ONGs</a>
      <a href="{{ route('causas.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Causas</a>
      <a href="{{ route('inicio') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-green-600 hover:bg-gray-50">Contato</a>
    </div>
    <div class="px-4 pt-4 pb-4 border-t border-gray-200 flex flex-col gap-2">
      <a href="{{ route('inicio') }}" class="bg-white text-green-600 border border-green-600 px-4 py-2 rounded-md font-medium hover:bg-green-50 transition">Entrar</a>
      <a href="{{ route('cadastro') }}" class="bg-green-600 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700 transition">Cadastrar</a>
    </div>
  </div>
</nav>

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (btn && menu) btn.addEventListener('click', () => menu.classList.toggle('hidden'));
  });
</script>
@endpush
