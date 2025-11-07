<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.header')
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Main Content -->
    <div class="pt-20 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-white mb-4">Cadastro de Voluntário</h1>
                <p class="text-xl text-blue-100">Junte-se a nós e faça a diferença no mundo</p>
            </div>

            <!-- Registration Form Container -->
            <div class="form-container rounded-2xl shadow-2xl p-8 md:p-12">
                <!-- Progress Bar -->
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm font-medium text-gray-600">Progresso do cadastro</span>
                        <span class="text-sm font-medium text-gray-600" id="progress-text">Passo 1 de 4</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="progress-bar bg-blue-600 h-2 rounded-full" style="width: 25%"></div>
                    </div>
                </div>

                <!-- Step Indicators -->
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

                <form id="registration-form" method="POST" action="{{ route('cadastro_voluntario.store') }}">
                    @csrf

                    {{-- Erros do Backend --}}
                    @if ($errors->any())
                        <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                            <ul class="list-disc ml-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <!-- Step 1: Personal Information -->
                        <div class="form-step active" id="step-1">
                            <div class="text-center mb-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Informações Pessoais</h2>
                                <p class="text-gray-600">Conte-nos um pouco sobre você</p>
                            </div>

                            <div class="max-w-2xl mx-auto space-y-6">
                                <div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Nome Completo
                                            *</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                                            class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            required>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">E-mail *</label>
                                    <input type="email" id="email" name="email"
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        required>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="telefone"
                                            class="block text-sm font-medium text-gray-700 mb-2">Telefone *</label>
                                        <input type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999"
                                            value="{{ old('telefone') }}"
                                            class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            required>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Data de Nascimento
                                            *</label>
                                        <input type="date" id="dta_nascimento" name="dta_nascimento"
                                            value="{{ old('dta_nascimento') }}"
                                            class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            required>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Estado *</label>
                                        <select id="estado" name="estado"
                                            class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            required>
                                            <option value="">Selecione seu estado</option>
                                            @php $UFs = ['AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO']; @endphp
                                            @foreach($UFs as $uf) <option value="{{ $uf }}"
                                            @selected(old('estado') === $uf)>{{ $uf }}</option> @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Cidade *</label>
                                        <input type="text" id="cidade" name="cidade" value="{{ old('cidade') }}"
                                            class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            required>
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

                        <!-- Step 2: Interests -->
                        <div class="form-step" id="step-2">
                            <div class="text-center mb-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Suas Causas de Interesse</h2>
                                <p class="text-gray-600">Selecione as causas que mais te motivam a fazer voluntariado
                                </p>
                            </div>

                            <div class="max-w-4xl mx-auto">
                                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-8">
                                    @forelse($causas as $causa)
                                        <label
                                            class="interest-card flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                                            <input type="checkbox" name="causas[]" value="{{ $causa->id }}"
                                                class="mr-3 text-blue-600" @checked(collect(old('causas', []))->contains($causa->id))>
                                            <span class="font-medium">{{ $causa->nome }}</span>
                                        </label>
                                    @empty
                                        <p class="text-gray-600">Nenhuma causa cadastrada no momento.</p>
                                    @endforelse
                                </div>

                                <div class="space-y-6">
                                    <div>
                                        <label for="disponibilidade"
                                            class="block text-sm font-medium text-gray-700 mb-2">Disponibilidade
                                            *</label>
                                        <select id="disponibilidade" name="disponibilidade"
                                            class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                            required>
                                            <option value="">Selecione sua disponibilidade</option>
                                            <option value="finais_semana"
                                                @selected(old('disponibilidade') === 'finais_semana')>Finais de semana
                                            </option>
                                            <option value="dias_semana"
                                                @selected(old('disponibilidade') === 'dias_semana')>Dias de semana
                                            </option>
                                            <option value="noites" @selected(old('disponibilidade') === 'noites')>Noites
                                            </option>
                                            <option value="manhas" @selected(old('disponibilidade') === 'manhas')>Manhãs
                                            </option>
                                            <option value="flexivel" @selected(old('disponibilidade') === 'flexivel')>
                                                Horário flexível</option>
                                        </select>
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

                        <!-- Step 3: Skills and Experience -->
                        <div class="form-step" id="step-3">
                            <div class="text-center mb-8">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Suas Habilidades</h2>
                                <p class="text-gray-600">Conte-nos sobre suas experiências e competências</p>
                            </div>

                            <div class="max-w-2xl mx-auto space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Profissão/Área de
                                        Atuação</label>
                                    <input type="text" id="profissao" name="profissao" value="{{ old('profissao') }}"
                                        placeholder="Ex: Professor, Engenheiro, Estudante..."
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Habilidades e
                                        Competências</label>
                                    <textarea id="habilidades" name="habilidades" rows="4"
                                        placeholder="Descreva suas principais habilidades, conhecimentos técnicos, idiomas, etc."
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none"></textarea>
                                </div>

                                <div>
                                    <label for="experiencia"
                                        class="block text-sm font-medium text-gray-700 mb-2">Experiência em
                                        Voluntariado</label>
                                    <select id="experiencia" name="experiencia"
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                        <option value="">Selecione sua experiência</option>
                                        <option value="nunca" @selected(old('experiencia') === 'nunca')>Nunca fiz trabalho
                                            voluntário</option>
                                        <option value="pouca" @selected(old('experiencia') === 'pouca')>Pouca experiência
                                            (menos de 1 ano)</option>
                                        <option value="moderada" @selected(old('experiencia') === 'moderada')>Experiência
                                            moderada (1-3 anos)</option>
                                        <option value="bastante" @selected(old('experiencia') === 'bastante')>Bastante
                                            experiência (mais de 3 anos)</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Motivação para ser
                                        Voluntário</label>
                                    <textarea id="motivation" name="motivation" rows="3"
                                        placeholder="O que te motiva a fazer trabalho voluntário?"
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none resize-none"></textarea>
                                </div>

                                <div>
                                    <label for="tempo_semana" class="block text-sm font-medium text-gray-700 mb-2">Tempo
                                        Disponível por Semana</label>
                                    <select id="tempo_semana" name="tempo_semana"
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
                                        <option value="">Selecione o tempo disponível</option>
                                        <option value="h1_2" @selected(old('tempo_semana') === 'h1_2')>1-2 horas por
                                            semana</option>
                                        <option value="h3_5" @selected(old('tempo_semana') === 'h3_5')>3-5 horas por
                                            semana</option>
                                        <option value="h6_10" @selected(old('tempo_semana') === 'h6_10')>6-10 horas por
                                            semana</option>
                                        <option value="h10_plus" @selected(old('tempo_semana') === 'h10_plus')>Mais de 10
                                            horas por semana</option>
                                    </select>
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
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">Finalize seu Cadastro</h2>
                                <p class="text-gray-600">Crie uma senha segura para sua conta</p>
                            </div>

                            <div class="max-w-md mx-auto space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Senha *</label>
                                    <input type="password" id="password" name="password"
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        required>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Confirmar Senha
                                        *</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="w-full px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                        required>
                                </div>

                                <!-- Password Requirements -->
                                <div class="text-sm text-gray-600">
                                    <p class="mb-2 font-medium">Sua senha deve conter:</p>
                                    <ul class="space-y-1" id="password-requirements">
                                        <li class="flex items-center" id="req-length">
                                            <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Pelo menos 8 caracteres</span>
                                        </li>
                                        <li class="flex items-center" id="req-uppercase">
                                            <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Uma letra maiúscula</span>
                                        </li>
                                        <li class="flex items-center" id="req-lowercase">
                                            <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Uma letra minúscula</span>
                                        </li>
                                        <li class="flex items-center" id="req-number">
                                            <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Um número</span>
                                        </li>
                                        <li class="flex items-center" id="req-special">
                                            <svg class="h-4 w-4 text-gray-400 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
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
                                    <input type="checkbox" id="terms" name="terms" class="mt-1 mr-3 text-blue-600"
                                        required>
                                    <label for="terms" class="text-sm text-gray-600">
                                        Eu concordo com os <a href="#" class="text-blue-600 hover:underline">Termos de
                                            Uso</a> e
                                        <a href="#" class="text-blue-600 hover:underline">Política de Privacidade</a> *
                                    </label>
                                </div>

                                <div class="flex items-start">
                                    <input type="checkbox" id="newsletter" name="newsletter"
                                        class="mt-1 mr-3 text-blue-600">
                                    <label for="newsletter" class="text-sm text-gray-600">
                                        Quero receber novidades sobre oportunidades de voluntariado por e-mail
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
    <div id="success-modal" class="modal fixed inset-0 bg-black bg-opacity-50 z-50 items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-md w-full p-8 text-center transform scale-95 transition-transform">
            <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6">
                <svg class="h-10 w-10 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Bem-vindo ao Aproxima+ !</h2>
            <p class="text-gray-600 mb-8">Seu cadastro foi realizado com sucesso! Agora você pode começar a encontrar
                oportunidades de voluntariado que combinam com seu perfil.</p>
            <button onclick="closeModal()"
                class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                Explorar Oportunidades
            </button>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

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
            currentStep = 4;
            showStep(currentStep);
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
            const required = ['name','email','telefone','dta_nascimento','estado','cidade'];
            let isValid = true;
            for (const id of required) {
                const el = document.getElementById(id);
                if (!el || !el.value || !el.value.trim()) {
                    el?.classList.add('border-red-500');
                    isValid = false;
                }   else {
                    el.classList.remove('border-red-500');
                }
            }

            if (!isValid) {
                alert('Por favor, preencha todos os campos obrigatórios.');
            }

            return isValid;
        }

        function validateStep2() {
            const interests = document.querySelectorAll('input[name="causas[]"]:checked');
            const disponibilidadeEl = document.getElementById('disponibilidade');

            if (interests.length === 0) {
                alert('Por favor, selecione pelo menos uma causa de interesse.');
                return false;
            }

            if (!disponibilidadeEl || !disponibilidadeEl.value) {
                alert('Por favor, selecione sua disponibilidade.');
                disponibilidadeEl?.classList.add('border-red-500');
                return false;
            } else {
                disponibilidadeEl.classList.remove('border-red-500');
            }

            return true;
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
            const confirmPassword = document.getElementById('password_confirmation').value;
            const messageDiv = document.getElementById('password-match-message');

            if (confirmPassword.length > 0) {
                if (password === confirmPassword) {
                    messageDiv.innerHTML = '<p class="text-green-600 flex items-center"><svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>As senhas coincidem</p>';
                    messageDiv.classList.remove('hidden');
                    document.getElementById('confirmPassword').classList.remove('border-red-500');
                    document.getElementById('confirmPassword').classList.add('border-green-500');
                } else {
                    messageDiv.innerHTML = '<p class="text-red-600 flex items-center"><svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>As senhas não coincidem</p>';
                    messageDiv.classList.remove('hidden');
                    document.getElementById('confirmPassword').classList.add('border-red-500');
                    document.getElementById('confirmPassword').classList.remove('border-green-500');
                }
            } else {
                messageDiv.classList.add('hidden');
                document.getElementById('confirmPassword').classList.remove('border-red-500', 'border-green-500');
            }
        }

        // Form submission
        document.getElementById('registration-form').addEventListener('submit', function (e) {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('password_confirmation').value;
            const termsOk = document.getElementById('terms').checked;

            if (!validatePassword(password)) { e.preventDefault(); alert('A senha não atende aos requisitos.'); return; }
            if (password !== confirm) { e.preventDefault(); alert('As senhas não coincidem.'); return; }
            if (!termsOk) { e.preventDefault(); alert('Aceite os termos para continuar.'); return; }
            // se chegou aqui, deixa enviar pro backend
        });

        // Modal functions
        function showModal() {
            const modal = document.getElementById('success-modal');
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('success-modal');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
            window.location.href = 'ONGS.html';
        }

        // Close modal on outside click
        document.getElementById('success-modal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Password field event listeners
        document.getElementById('password').addEventListener('input', function () {
            const password = this.value;
            validatePassword(password);

            // Also check password match if confirm password has value
            const confirmPassword = document.getElementById('password_confirmation').value;
            if (confirmPassword.length > 0) {
                checkPasswordMatch();
            }
        });

        document.getElementById('password_confirmation').addEventListener('input', function () {
            checkPasswordMatch();
        });

        // Initialize
        updateProgress();
    </script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'95c9e3e350e11af2',t:'MTc1MjA4NTgwMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>

</html>