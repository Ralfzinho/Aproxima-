<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-aproxima.png') }}">
    <title>Aproxima+ conectando você a quem precisa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastro_ong.css') }}">
</head>


<body>
    @include('partials.header')
    <script src="{{ asset('js/app.js') }}"></script>


    <div class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-white mb-4">Cadastro de ONG</h1>
                <p class="text-xl text-blue-100">Conecte sua organização com voluntários engajados</p>
            </div>


            <div class="form-container rounded-2xl shadow-2xl p-8 md:p-12">
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm font-medium text-gray-600">Progresso do cadastro</span>
                        <span class="text-sm font-medium text-gray-600" id="progress-text">Passo 1 de 4</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="progress-bar bg-blue-600 h-2 rounded-full" style="width: 25%"></div>
                    </div>
                </div>


                <div class="flex justify-center mb-12">
                    <div class="flex space-x-4">
                        <div
                            class="step-indicator active w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold bg-gray-200">
                            1</div>
                        <div
                            class="step-indicator w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold bg-gray-200">
                            2</div>
                        <div
                            class="step-indicator w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold bg-gray-200">
                            3</div>
                        <div
                            class="step-indicator w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold bg-gray-200">
                            4</div>
                    </div>
                </div>


                <form id="registration-form" method="POST" action="{{ route('cadastro_ong.store') }}">
                    @csrf
                    <!-- Step 1: Organization Information -->
                    <div class="form-step active" id="step-1">
                        <div class="text-center mb-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Informações da Organização</h2>
                            <p class="text-gray-600">Conte-nos sobre sua ONG</p>
                        </div>

                        <div class="max-w-2xl mx-auto space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nome da ONG *</label>
                                <input type="text" id="org_name" name="org_name"
                                    class="w-full px-3 py-3 border @error('org_name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    value="{{ old('org_name') }}" required>
                                @error('org_name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">CNPJ *</label>
                                    <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00"
                                        class="w-full px-3 py-3 border @error('cnpj') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        value="{{ old('cnpj') }}" required>
                                    @error('cnpj')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Ano de Fundação</label>
                                    <input type="number" id="founding_year" name="founding_year" min="1900" max="2024"
                                        class="w-full px-3 py-3 border @error('founding_year') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        value="{{ old('founding_year') }}">
                                    @error('founding_year')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">E-mail Institucional
                                    *</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-3 py-3 border @error('email') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Telefone *</label>
                                    <input type="tel" id="phone" name="phone" placeholder="(11) 3333-3333"
                                        class="w-full px-3 py-3 border @error('phone') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Site/Redes
                                        Sociais</label>
                                    <input type="text" id="website" name="website"
                                        placeholder="https://www.suaong.org.br"
                                        class="w-full px-3 py-3 border @error('website') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        value="{{ old('website') }}">
                                    @error('website')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Endereço Completo *</label>
                                <input type="text" id="address" name="address" placeholder="Rua, número, bairro"
                                    class="w-full px-3 py-3 border @error('address') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid md:grid-cols-3 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Estado *</label>
                                    <select id="state" name="state"
                                        class="w-full px-3 py-3 border @error('state') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        required>
                                        <option value="">Selecione seu estado</option>
                                        <option value="AC" @selected(old('state')=='AC' )>Acre</option>
                                        <option value="AL" @selected(old('state')=='AL' )>Alagoas</option>
                                        <option value="AP" @selected(old('state')=='AP' )>Amapá</option>
                                        <option value="AM" @selected(old('state')=='AM' )>Amazonas</option>
                                        <option value="BA" @selected(old('state')=='BA' )>Bahia</option>
                                        <option value="CE" @selected(old('state')=='CE' )>Ceará</option>
                                        <option value="DF" @selected(old('state')=='DF' )>Distrito Federal</option>
                                        <option value="ES" @selected(old('state')=='ES' )>Espírito Santo</option>
                                        <option value="GO" @selected(old('state')=='GO' )>Goiás</option>
                                        <option value="MA" @selected(old('state')=='MA' )>Maranhão</option>
                                        <option value="MT" @selected(old('state')=='MT' )>Mato Grosso</option>
                                        <option value="MS" @selected(old('state')=='MS' )>Mato Grosso do Sul</option>
                                        <option value="MG" @selected(old('state')=='MG' )>Minas Gerais</option>
                                        <option value="PA" @selected(old('state')=='PA' )>Pará</option>
                                        <option value="PB" @selected(old('state')=='PB' )>Paraíba</option>
                                        <option value="PR" @selected(old('state')=='PR' )>Paraná</option>
                                        <option value="PE" @selected(old('state')=='PE' )>Pernambuco</option>
                                        <option value="PI" @selected(old('state')=='PI' )>Piauí</option>
                                        <option value="RJ" @selected(old('state')=='RJ' )>Rio de Janeiro</option>
                                        <option value="RN" @selected(old('state')=='RN' )>Rio Grande do Norte</option>
                                        <option value="RS" @selected(old('state')=='RS' )>Rio Grande do Sul</option>
                                        <option value="RO" @selected(old('state')=='RO' )>Rondônia</option>
                                        <option value="RR" @selected(old('state')=='RR' )>Roraima</option>
                                        <option value="SC" @selected(old('state')=='SC' )>Santa Catarina</option>
                                        <option value="SP" @selected(old('state')=='SP' )>São Paulo</option>
                                        <option value="SE" @selected(old('state')=='SE' )>Sergipe</option>
                                        <option value="TO" @selected(old('state')=='TO' )>Tocantins</option>
                                    </select>
                                    @error('state')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Cidade *</label>
                                    <input type="text" id="city" name="city"
                                        class="w-full px-3 py-3 border @error('city') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        value="{{ old('city') }}" required>
                                    @error('city')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">CEP</label>
                                    <input type="text" id="cep" name="cep" placeholder="00000-000"
                                        class="w-full px-3 py-3 border @error('cep') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        value="{{ old('cep') }}">
                                    @error('cep')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-12 max-w-2xl mx-auto">
                            <button type="button" id="next-step-1"
                                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                Continuar
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Areas of Activity -->
                    <div class="form-step" id="step-2">
                        <div class="text-center mb-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Áreas de Atuação</h2>
                            <p class="text-gray-600">Selecione as causas em que sua ONG atua</p>
                        </div>

                        <div class="max-w-4xl mx-auto">
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                                @forelse($causas as $causa)
                                <label
                                    class="interest-card flex items-center p-4 border @error('causas') border-red-500 @else border-gray-200 @enderror rounded-lg cursor-pointer hover:bg-gray-50">
                                    <input type="checkbox" name="causas[]" value="{{ $causa->id }}"
                                        class="mr-3 text-blue-600" @checked(collect(old('causas', []))->contains($causa->id))>
                                    <span class="font-medium">{{ $causa->nome }}</span>
                                </label>
                                @empty
                                <p class="text-gray-600">Nenhuma causa cadastrada no momento.</p>
                                @endforelse
                            </div>
                            @error('causas')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <div class="space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Descrição da Missão da
                                        ONG *</label>
                                    <textarea id="mission" name="mission" rows="4"
                                        placeholder="Descreva brevemente a missão e objetivos da sua organização..."
                                        class="w-full px-3 py-3 border @error('mission') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none"
                                        required>{{ old('mission') }}</textarea>
                                    @error('mission')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Número de Beneficiários
                                        Atendidos</label>
                                    <select id="beneficiaries" name="beneficiaries"
                                        class="w-full px-3 py-3 border @error('beneficiaries') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                        <option value="">Selecione</option>
                                        <option value="1-50" @selected(old('beneficiaries')=='1-50' )>1 a 50 pessoas</option>
                                        <option value="51-200" @selected(old('beneficiaries')=='51-200' )>51 a 200 pessoas</option>
                                        <option value="201-500" @selected(old('beneficiaries')=='201-500' )>201 a 500 pessoas</option>
                                        <option value="501-1000" @selected(old('beneficiaries')=='501-1000' )>501 a 1.000 pessoas</option>
                                        <option value="1000+" @selected(old('beneficiaries')=='1000+' )>Mais de 1.000 pessoas</option>
                                    </select>
                                    @error('beneficiaries')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-12 max-w-2xl mx-auto">
                            <button type="button" id="prev-step-2"
                                class="bg-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-400 transition">
                                Voltar
                            </button>
                            <button type="button" id="next-step-2"
                                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                Continuar
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Volunteer Needs -->
                    <div class="form-step" id="step-3">
                        <div class="text-center mb-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Necessidades de Voluntários</h2>
                            <p class="text-gray-600">Conte-nos sobre os voluntários que vocês procuram</p>
                        </div>

                        <div class="max-w-2xl mx-auto space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Tipos de Voluntários
                                    Procurados *</label>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" name="volunteer_types[]" value="presencial"
                                            class="mr-3 text-blue-600" @checked(collect(old('volunteer_types', []))->contains('presencial'))>
                                        <span>Voluntários presenciais</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="volunteer_types[]" value="remoto"
                                            class="mr-3 text-blue-600" @checked(collect(old('volunteer_types', []))->contains('remoto'))>
                                        <span>Voluntários remotos</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="volunteer_types[]" value="especializado"
                                            class="mr-3 text-blue-600" @checked(collect(old('volunteer_types', []))->contains('especializado'))>
                                        <span>Voluntários especializados (profissionais)</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" name="volunteer_types[]" value="pontual"
                                            class="mr-3 text-blue-600" @checked(collect(old('volunteer_types', []))->contains('pontual'))>
                                        <span>Voluntários para ações pontuais</span>
                                    </label>
                                </div>
                                @error('volunteer_types')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Habilidades
                                    Desejadas</label>
                                <textarea id="desired_skills" name="desired_skills" rows="3"
                                    placeholder="Ex: Marketing digital, contabilidade, ensino, cuidados médicos, etc."
                                    class="w-full px-3 py-3 border @error('desired_skills') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none">{{ old('desired_skills') }}</textarea>
                                @error('desired_skills')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Projetos Atuais *</label>
                                <textarea id="current_projects" name="current_projects" rows="4"
                                    placeholder="Descreva os principais projetos em andamento que precisam de voluntários..."
                                    class="w-full px-3 py-3 border @error('current_projects') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none"
                                    required>{{ old('current_projects') }}</textarea>
                                @error('current_projects')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Frequência de
                                        Atividades</label>
                                    <select id="frequency" name="frequency"
                                        class="w-full px-3 py-3 border @error('frequency') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                        <option value="">Selecione</option>
                                        <option value="diaria" @selected(old('frequency')=='diaria' )>Atividades diárias</option>
                                        <option value="semanal" @selected(old('frequency')=='semanal' )>Atividades semanais</option>
                                        <option value="mensal" @selected(old('frequency')=='mensal' )>Atividades mensais</option>
                                        <option value="eventual" @selected(old('frequency')=='eventual' )>Atividades eventuais</option>
                                    </select>
                                    @error('frequency')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Número de Voluntários
                                        Ativos</label>
                                    <select id="active_volunteers" name="active_volunteers"
                                        class="w-full px-3 py-3 border @error('active_volunteers') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                        <option value="">Selecione</option>
                                        <option value="0-5" @selected(old('active_volunteers')=='0-5' )>0 a 5 voluntários</option>
                                        <option value="6-15" @selected(old('active_volunteers')=='6-15' )>6 a 15 voluntários</option>
                                        <option value="16-30" @selected(old('active_volunteers')=='16-30' )>16 a 30 voluntários</option>
                                        <option value="31-50" @selected(old('active_volunteers')=='31-50' )>31 a 50 voluntários</option>
                                        <option value="50+" @selected(old('active_volunteers')=='50+' )>Mais de 50 voluntários</option>
                                    </select>
                                    @error('active_volunteers')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Pessoa Responsável pelo
                                    Contato *</label>
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <input type="text" id="contact_name" name="contact_name" placeholder="Nome completo"
                                            class="w-full px-3 py-3 border @error('contact_name') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            value="{{ old('contact_name') }}" required>
                                        @error('contact_name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="text" id="contact_role" name="contact_role" placeholder="Cargo/Função"
                                            class="w-full px-3 py-3 border @error('contact_role') border-red-500 @else border-gray-300 @enderror rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            value="{{ old('contact_role') }}" required>
                                        @error('contact_role')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-between mt-12 max-w-2xl mx-auto">
                            <button type="button" id="prev-step-3"
                                class="bg-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-400 transition">
                                Voltar
                            </button>
                            <button type="button" id="next-step-3"
                                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                Continuar
                            </button>
                        </div>
                    </div>

                    <!-- Step 4: Password -->
                    <div class="form-step" id="step-4">
                        <div class="text-center mb-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Finalize o Cadastro</h2>
                            <p class="text-gray-600">Crie uma senha segura para a conta da sua ONG</p>
                        </div>

                        <div class="max-w-md mx-auto space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Senha *</label>
                                <div class="relative">
                                    <input type="password" id="password" placeholder="********" class="input-field w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="password" required>
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center  pointer-events-none">
                                        <svg class="h-5 w-5 tezt-gray-400" fill="currentColor" viewbox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                                        <button type="button" class="password-toggler text-gray-400" onclick="togglerPassword('password')">
                                            <svg id="eye-open-password" class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                            </svg>
                                            <svg id="eye-closed-password" class="h-5 w-5 hidden" fill="currentColor" viewbox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                                                <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Confirmar Senha *</label>
                                <div class="relative">
                                    <input type="password" id="password_confirmation" placeholder="********" class="input-field w-full px-4 py-3 pl-12 pr-12 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent" name="password_confirmation" required>
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center  pointer-events-none">
                                        <svg class="h-5 w-5 tezt-gray-400" fill="currentColor" viewbox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center">
                                        <button type="button" class="password-toggler text-gray-400" onclick="togglerPassword('password_confirmation')">
                                            <svg id="eye-open-password_confirmation" class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                            </svg>
                                            <svg id="eye-closed-password_confirmation" class="h-5 w-5 hidden" fill="currentColor" viewbox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd" />
                                                <path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Password Requirements -->
                            <div class="text-sm text-gray-600">
                                <p class="mb-2 font-medium">Sua senha deve conter:</p>
                                <ul class="space-y-1" id="password-requirements">
                                    <li class="flex items-center" id="req-length">
                                        <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Pelo menos 8 caracteres</span>
                                    </li>
                                    <li class="flex items-center" id="req-uppercase">
                                        <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Uma letra maiúscula</span>
                                    </li>
                                    <li class="flex items-center" id="req-lowercase">
                                        <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Uma letra minúscula</span>
                                    </li>
                                    <li class="flex items-center" id="req-number">
                                        <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Um número</span>
                                    </li>
                                    <li class="flex items-center" id="req-special">
                                        <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Um caractere especial (@, #, $, etc.)</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Password Match Message -->
                            <div id="password-match-message" class="text-sm hidden">
                                <!-- Password match message will appear here -->
                            </div>

                            <div class="flex items-start">
                                <input type="checkbox" id="terms" name="terms" class="mt-1 mr-3 text-blue-600" required>
                                <label for="terms" class="text-sm text-gray-600">
                                    Eu concordo com os <a href="#" class="text-blue-600 hover:underline">Termos de
                                        Uso</a> e
                                    <a href="#" class="text-blue-600 hover:underline">Política de Privacidade</a> *
                                </label>
                            </div>
                            @error('terms')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror

                            <div class="flex items-start">
                                <input type="checkbox" id="newsletter" name="newsletter" value="1"
                                    class="mt-1 mr-3 text-blue-600" @checked(old('newsletter'))>
                                <label for="newsletter" class="text-sm text-gray-600">
                                    Quero receber novidades sobre voluntários e funcionalidades da plataforma
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-between mt-12 max-w-md mx-auto">
                            <button type="button" id="prev-step-4"
                                class="bg-gray-300 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-400 transition">
                                Voltar
                            </button>
                            <button type="submit" id="submit-form"
                                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                                Criar Conta
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="success-modal"
        class="modal hidden fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 text-center transform scale-95 transition-transform">
            <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                <svg class="h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">ONG cadastrada com sucesso!</h2>
            <p class="text-gray-600 mb-8">Bem-vinda ao Aproxima+ ! Sua organização agora pode começar a encontrar
                voluntários qualificados e engajados com suas causas.</p>
            <button onclick="closeModal()"
                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Começar a buscar voluntários
            </button>
        </div>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 4;

        // Progress update
        function updateProgress() {
            const progressBar = document.querySelector('.progress-bar');
            const progressText = document.getElementById('progress-text');
            const stepIndicators = document.querySelectorAll('.step-indicator');

            const progressPercentage = (currentStep / totalSteps) * 100;
            progressBar.style.width = progressPercentage + '%';
            progressText.textContent = `Passo ${currentStep} de ${totalSteps}`;

            stepIndicators.forEach((indicator, index) => {
                indicator.classList.remove('active', 'completed');
                if (index + 1 < currentStep) {
                    indicator.classList.add('completed');
                } else if (index + 1 === currentStep) {
                    indicator.classList.add('active');
                }
            });
        }

        // Show step
        function showStep(step) {
            document.querySelectorAll('.form-step').forEach(s => s.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');
            updateProgress();
        }

        // Navigation buttons
        document.getElementById('next-step-1').addEventListener('click', () => {
            if (validateStep1()) {
                currentStep = 2;
                showStep(currentStep);
            }
        });

        document.getElementById('next-step-2').addEventListener('click', () => {
            if (validateStep2()) {
                currentStep = 3;
                showStep(currentStep);
            }
        });

        document.getElementById('next-step-3').addEventListener('click', () => {
            if (validateStep3()) {
                currentStep = 4;
                showStep(currentStep);
            }
        });

        document.getElementById('prev-step-2').addEventListener('click', () => {
            currentStep = 1;
            showStep(currentStep);
        });

        document.getElementById('prev-step-3').addEventListener('click', () => {
            currentStep = 2;
            showStep(currentStep);
        });

        document.getElementById('prev-step-4').addEventListener('click', () => {
            currentStep = 3;
            showStep(currentStep);
        });

        // Validation functions
        function validateStep1() {
            const requiredFields = ['org_name', 'cnpj', 'email', 'phone', 'address', 'state', 'city'];
            let isValid = true;

            requiredFields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                }
            });

            if (!isValid) {
                alert('Por favor, preencha todos os campos obrigatórios.');
            }

            return isValid;
        }

        function validateStep2() {
            const areas = document.querySelectorAll('input[name="causas[]"]:checked');
            const mission = document.getElementById('mission').value;

            if (areas.length === 0) {
                alert('Por favor, selecione pelo menos uma área de atuação.');
                return false;
            }

            if (!mission.trim()) {
                alert('Por favor, descreva a missão da sua ONG.');
                document.getElementById('mission').classList.add('border-red-500');
                return false;
            } else {
                document.getElementById('mission').classList.remove('border-red-500');
            }

            return true;
        }

        function validateStep3() {
            const volunteerTypes = document.querySelectorAll('input[name="volunteer_types[]"]:checked');
            const current_projects = document.getElementById('current_projects').value;
            const contact_name = document.getElementById('contact_name').value;
            const contact_role = document.getElementById('contact_role').value;

            if (volunteerTypes.length === 0) {
                alert('Por favor, selecione pelo menos um tipo de voluntário procurado.');
                return false;
            }

            if (!current_projects.trim()) {
                alert('Por favor, descreva os projetos atuais.');
                document.getElementById('current_projects').classList.add('border-red-500');
                return false;
            } else {
                document.getElementById('current_projects').classList.remove('border-red-500');
            }

            if (!contact_name.trim() || !contact_role.trim()) {
                alert('Por favor, preencha as informações da pessoa responsável pelo contato.');
                if (!contact_name.trim()) document.getElementById('contact_name').classList.add('border-red-500');
                if (!contact_role.trim()) document.getElementById('contact_role').classList.add('border-red-500');
                return false;
            } else {
                document.getElementById('contact_name').classList.remove('border-red-500');
                document.getElementById('contact_role').classList.remove('border-red-500');
            }

            return true;
        }
        // Password visibility toggle
        function togglerPassword(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeOpen = document.getElementById(`eye-open-${fieldId}`);
            const eyeClosed = document.getElementById(`eye-closed-${fieldId}`);
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                passwordField.type = "password";
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }
        // Password validation functions
        function validatePassword(password) {
            const requirements = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password)
            };

            // Update visual indicators
            updateRequirementIndicator('req-length', requirements.length);
            updateRequirementIndicator('req-uppercase', requirements.uppercase);
            updateRequirementIndicator('req-lowercase', requirements.lowercase);
            updateRequirementIndicator('req-number', requirements.number);
            updateRequirementIndicator('req-special', requirements.special);

            return Object.values(requirements).every(req => req);
        }

        function updateRequirementIndicator(elementId, isValid) {
            const element = document.getElementById(elementId);
            const svg = element.querySelector('svg');
            const span = element.querySelector('span');

            if (isValid) {
                svg.classList.remove('text-gray-400');
                svg.classList.add('text-green-500');
                span.classList.remove('text-gray-600');
                span.classList.add('text-green-600');
            } else {
                svg.classList.remove('text-green-500');
                svg.classList.add('text-gray-400');
                span.classList.remove('text-green-600');
                span.classList.add('text-gray-600');
            }
        }

        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const password_confirmation = document.getElementById('password_confirmation').value;
            const messageDiv = document.getElementById('password-match-message');

            if (password_confirmation.length > 0) {
                if (password === password_confirmation) {
                    messageDiv.innerHTML = '<p class="text-green-600 flex items-center"><svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>As senhas coincidem</p>';
                    messageDiv.classList.remove('hidden');
                    document.getElementById('password_confirmation').classList.remove('border-red-500');
                    document.getElementById('password_confirmation').classList.add('border-green-500');
                } else {
                    messageDiv.innerHTML = '<p class="text-red-600 flex items-center"><svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>As senhas não coincidem</p>';
                    messageDiv.classList.remove('hidden');
                    document.getElementById('password_confirmation').classList.add('border-red-500');
                    document.getElementById('password_confirmation').classList.remove('border-green-500');
                }
            } else {
                messageDiv.classList.add('hidden');
                document.getElementById('password_confirmation').classList.remove('border-red-500', 'border-green-500');
            }
        }

        // Modal functions
        let redirected = false;

        function showModal() {
            const modal = document.getElementById('success-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';

            setTimeout(() => {
                if (!redirected) {
                    redirected = true;
                    window.location.href = '/ongs';
                }
            }, 4000);
        }

        function closeModal() {
            if (!redirected) {
                redirected = true;
                document.body.style.overflow = 'auto';
                window.location.href = '/ongs';
            }
        }

        // Password field event listeners
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            validatePassword(password);

            // Also check password match if confirm password has value
            const password_confirmation = document.getElementById('password_confirmation').value;
            if (password_confirmation.length > 0) {
                checkPasswordMatch();
            }
        });

        document.getElementById('password_confirmation').addEventListener('input', function() {
            checkPasswordMatch();
        });

        // Initialize
        updateProgress();
    </script>
</body>

</html>