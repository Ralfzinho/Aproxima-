/**
 * Exibe um modal genérico com conteúdo dinâmico.
 *
 * @param {object} options As opções para o modal.
 * @param {string} options.title O título do modal.
 * @param {string} options.message A mensagem principal.
 * @param {string} [options.type='info'] O tipo de modal ('success', 'error', 'loading', 'info').
 * @param {string|null} [options.footerHtml=null] O HTML para o rodapé (botões, spinner, etc.).
 */
function showAppModal({ title, message, type = 'info', footerHtml = null }) {
    const modal = document.getElementById('app-modal');
    if (!modal) {
        console.error('Elemento do modal #app-modal não encontrado no DOM.');
        return;
    }

    const iconContainer = document.getElementById('modal-icon-container');
    const modalTitle = document.getElementById('modal-title');
    const modalMessage = document.getElementById('modal-message');
    const modalFooter = document.getElementById('modal-footer');

    // Definições de ícones e estilos
    const modalTypes = {
        success: {
            bgColor: 'bg-green-100',
            iconColor: 'text-green-600',
            iconSvg: `<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" /></svg>`
        },
        error: {
            bgColor: 'bg-red-100',
            iconColor: 'text-red-600',
            iconSvg: `<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>`
        },
        loading: {
            bgColor: 'bg-blue-100',
            iconColor: 'text-blue-600',
            iconSvg: `<svg class="w-8 h-8 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>`
        },
        info: {
            bgColor: 'bg-gray-100',
            iconColor: 'text-gray-600',
            iconSvg: `<svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" /></svg>`
        }
    };

    const config = modalTypes[type] || modalTypes.info;

    // Atualiza o conteúdo do DOM
    modalTitle.textContent = title;
    modalMessage.textContent = message;

    iconContainer.innerHTML = config.iconSvg;
    iconContainer.className = `flex items-center justify-center w-16 h-16 mx-auto mb-4 rounded-full ${config.bgColor} ${config.iconColor}`;

    if (footerHtml) {
        modalFooter.innerHTML = footerHtml;
    } else {
        modalFooter.innerHTML = `<button onclick="closeAppModal()" class="w-full bg-gray-200 text-gray-800 py-2 rounded-lg hover:bg-gray-300">Fechar</button>`;
    }

    modal.classList.remove('hidden');
}

/**
 * Fecha o modal genérico.
 */
function closeAppModal() {
    const modal = document.getElementById('app-modal');
    if (modal) {
        modal.classList.add('hidden');
    }
}

// Adiciona um listener para fechar o modal clicando no overlay
document.addEventListener('click', event => {
    const modal = event.target.closest('.modal');
    if (modal && !event.target.closest('.bg-white')) {
        closeAppModal();
    }
});
