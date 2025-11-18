<div>
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">ONGs Disponíveis</h2>
            <p class="text-gray-600" id="results-count">Mostrando {{ $ongs->firstItem() }} a {{ $ongs->lastItem() }} de {{ $ongs->total() }} organizações</p>
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
        @foreach ($ongs as $ong)
            <div class="ong-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex items-center">
                            <div class="bg-blue-100 rounded-full p-3 mr-4">
                                {{-- Ícone genérico, pode ser customizado depois --}}
                                <svg class="h-8 w-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">{{ $ong->org_name }}</h3>
                                <p class="text-sm text-gray-600">{{ $ong->city }}, {{ $ong->state }}</p>
                            </div>
                        </div>
                        <div class="flex items-center text-yellow-400">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="ml-1 text-sm text-gray-600">4.9</span> {{-- Placeholder para avaliação --}}
                        </div>
                    </div>

                    <p class="text-gray-700 mb-4 text-sm">
                        {{ Str::limit($ong->mission, 150) }}
                    </p>

                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach ($ong->causas as $causa)
                            <span class="tag tag-blue">{{ $causa->nome }}</span>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-between text-sm text-gray-600 mb-4">
                        <span class="flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Verificada
                        </span>
                        <span>{{-- Placeholder para voluntários --}}</span>
                    </div>

                    <div class="flex space-x-3">
                        <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-md text-sm font-medium hover:bg-blue-700 transition">
                            Ver Perfil
                        </button>
                        <button class="flex-1 bg-gray-100 text-gray-700 py-2 px-4 rounded-md text-sm font-medium hover:bg-gray-200 transition">
                            Contatar
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $ongs->links() }}
    </div>
</div>
