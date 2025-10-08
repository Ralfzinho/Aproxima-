// Smooth scroll to sections
function scrollToSection(sectionId) {
    const element = document.getElementById(sectionId);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Impact counter animation
function animateCounters() {
    const counters = document.querySelectorAll('.impact-counter');

    counters.forEach(counter => {
        const target = parseInt(counter.dataset.target);
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                counter.textContent = target.toLocaleString('pt-BR');
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current).toLocaleString('pt-BR');
            }
        }, 16);
    });
}

// Trigger counter animation when section is visible
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounters();
            observer.unobserve(entry.target);
        }
    });
});

const statsSection = document.querySelector('.impact-counter').closest('section');
observer.observe(statsSection);

// Cause modal functionality
const causeData = {
    'meio-ambiente': {
        title: 'Meio Ambiente',
        icon: '<svg class="h-12 w-12 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm-.5-11.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-4.5 7h9v-2h-9v2z"/></svg>',
        description: 'A preservação do meio ambiente é fundamental para garantir um futuro sustentável para as próximas gerações. ONGs ambientais trabalham em diversas frentes para proteger nossos recursos naturais.',
        stats: ['42 ONGs ativas', '15.000 árvores plantadas', '8 rios despoluídos', '120 comunidades impactadas'],
        activities: ['Reflorestamento e plantio de árvores', 'Limpeza de rios e praias', 'Educação ambiental em escolas', 'Campanhas de reciclagem', 'Proteção de animais silvestres', 'Desenvolvimento de tecnologias sustentáveis']
    },
    'educacao': {
        title: 'Educação',
        icon: '<svg class="h-12 w-12 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"/></svg>',
        description: 'A educação é a base para transformar vidas e comunidades. ONGs educacionais trabalham para garantir acesso à educação de qualidade para todos, especialmente para populações vulneráveis.',
        stats: ['56 ONGs ativas', '25.000 crianças atendidas', '1.200 adultos alfabetizados', '180 cursos oferecidos'],
        activities: ['Reforço escolar para crianças', 'Alfabetização de adultos', 'Cursos profissionalizantes', 'Distribuição de material escolar', 'Bolsas de estudo', 'Capacitação de professores']
    },
    'saude': {
        title: 'Saúde',
        icon: '<svg class="h-12 w-12 text-pink-600" fill="currentColor" viewBox="0 0 24 24"><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>',
        description: 'O acesso à saúde é um direito fundamental. ONGs de saúde trabalham para levar cuidados médicos básicos e campanhas de prevenção para comunidades que mais precisam.',
        stats: ['38 ONGs ativas', '80.000 atendimentos', '450 campanhas de vacinação', '95 postos de saúde apoiados'],
        activities: ['Atendimento médico básico', 'Campanhas de vacinação', 'Prevenção de doenças', 'Distribuição de medicamentos', 'Educação em saúde', 'Apoio psicológico']
    },
    'animais': {
        title: 'Proteção Animal',
        icon: '<svg class="h-12 w-12 text-yellow-600" fill="currentColor" viewBox="0 0 24 24"><path d="M4.5 12a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm6 0a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"/></svg>',
        description: 'A proteção animal é uma causa que mobiliza milhares de pessoas. ONGs trabalham no resgate, cuidado e adoção responsável de animais abandonados ou em situação de risco.',
        stats: ['24 ONGs ativas', '3.200 animais resgatados', '2.800 adoções realizadas', '15.000 castrações gratuitas'],
        activities: ['Resgate de animais abandonados', 'Feiras de adoção', 'Castração gratuita', 'Tratamento veterinário', 'Campanhas de conscientização', 'Denúncia de maus-tratos']
    },
    'direitos-humanos': {
        title: 'Direitos Humanos',
        icon: '<svg class="h-12 w-12 text-purple-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>',
        description: 'A defesa dos direitos humanos é essencial para uma sociedade justa e igualitária. ONGs trabalham na proteção de grupos vulneráveis e na promoção da dignidade humana.',
        stats: ['31 ONGs ativas', '12.000 pessoas assistidas', '850 casos jurídicos', '200 campanhas de conscientização'],
        activities: ['Assistência jurídica gratuita', 'Combate à discriminação', 'Apoio a minorias', 'Defesa de refugiados', 'Promoção da igualdade', 'Educação em direitos']
    },
    'cultura': {
        title: 'Cultura',
        icon: '<svg class="h-12 w-12 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>',
        description: 'A cultura é a alma de um povo. ONGs culturais trabalham para preservar tradições, promover a arte brasileira e democratizar o acesso à cultura em todas as comunidades.',
        stats: ['18 ONGs ativas', '5.000 jovens atendidos', '120 oficinas culturais', '45 eventos realizados'],
        activities: ['Oficinas de arte e música', 'Preservação do patrimônio', 'Festivais culturais', 'Teatro comunitário', 'Dança tradicional', 'Literatura e contação de histórias']
    },
    'tecnologia': {
        title: 'Tecnologia e Inclusão Digital',
        icon: '<svg class="h-12 w-12 text-cyan-600" fill="currentColor" viewBox="0 0 24 24"><path d="M20 3H4c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h3l-1 1v2h12v-2l-1-1h3c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 13H4V5h16v11z"/></svg>',
        description: 'A inclusão digital é fundamental no mundo moderno. ONGs de tecnologia trabalham para democratizar o acesso à informação e capacitar pessoas com habilidades digitais.',
        stats: ['15 ONGs ativas', '8.000 pessoas capacitadas', '50 laboratórios de informática', '200 cursos oferecidos'],
        activities: ['Cursos de informática básica', 'Desenvolvimento web', 'Robótica educacional', 'Inclusão digital para idosos', 'Programação para jovens', 'Manutenção de computadores']
    },
    'esporte': {
        title: 'Esporte e Lazer',
        icon: '<svg class="h-12 w-12 text-lime-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>',
        description: 'O esporte transforma vidas e fortalece comunidades. ONGs esportivas promovem a saúde, disciplina e inclusão social através de atividades físicas e competições.',
        stats: ['22 ONGs ativas', '6.500 crianças atendidas', '35 modalidades oferecidas', '180 competições organizadas'],
        activities: ['Escolinhas esportivas', 'Competições comunitárias', 'Atividades físicas para idosos', 'Esporte adaptado', 'Formação de atletas', 'Eventos esportivos sociais']
    }
};

function openCauseModal(causeId) {
    const modal = document.getElementById('cause-modal');
    const modalHeader = document.getElementById('modal-header');
    const modalContent = document.getElementById('modal-content');
    const data = causeData[causeId];

    if (!data) return;

    modalHeader.innerHTML = `
                <div class="bg-gray-100 rounded-full p-3 mr-4">
                    ${data.icon}
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">${data.title}</h2>
                    <p class="text-gray-600">Conheça mais sobre esta causa</p>
                </div>
            `;

    modalContent.innerHTML = `
                <div class="mb-6">
                    <p class="text-gray-700 leading-relaxed">${data.description}</p>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    ${data.stats.map(stat => `
                        <div class="bg-gray-50 rounded-lg p-4 text-center">
                            <p class="text-sm text-gray-600">${stat}</p>
                        </div>
                    `).join('')}
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Principais atividades:</h3>
                    <div class="grid md:grid-cols-2 gap-3">
                        ${data.activities.map(activity => `
                            <div class="flex items-start">
                                <svg class="h-5 w-5 text-blue-600 mr-2 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="text-gray-700 text-sm">${activity}</span>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeCauseModal() {
    const modal = document.getElementById('cause-modal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('cause-modal').addEventListener('click', function (e) {
    if (e.target === this) {
        closeCauseModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        closeCauseModal();
    }
});


