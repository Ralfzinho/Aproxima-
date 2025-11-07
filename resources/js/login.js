document.addEventListener('DOMContentLoaded', function () {
    const loginForm = document.getElementById('login-form');
    if (!loginForm) return;

    // Função para mostrar/esconder senha
    window.togglePassword = function() {
        const passwordInput = document.getElementById('password');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClosed = document.getElementById('eye-closed');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            eyeOpen.classList.remove('hidden');
            eyeClosed.classList.add('hidden');
        }
    };

    // Submissão do formulário
    loginForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Validação básica
        if (!email || !password) {
            showInlineMessage('Por favor, preencha todos os campos.', 'error');
            return;
        }

        if (!email.includes('@')) {
            showInlineMessage('Por favor, insira um email válido.', 'error');
            return;
        }

        if (password.length < 6) {
            showInlineMessage('A senha deve ter pelo menos 6 caracteres.', 'error');
            return;
        }

        // Simulação de login
        if (email === 'user@aproxima.com' && password === 'password') {
            showAppModal({
                title: 'Login realizado com sucesso!',
                message: 'Redirecionando para o painel...',
                type: 'success',
                footerHtml: '<div class="animate-spin rounded-full h-6 w-6 border-b-2 border-blue-600 mx-auto"></div>'
            });

            setTimeout(() => {
                window.location.href = '/inicio';
            }, 2000);
        } else {
            showAppModal({
                title: 'Falha no Login',
                message: 'Email ou senha incorretos. Por favor, tente novamente.',
                type: 'error',
                footerHtml: `<button onclick="closeAppModal()" class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600">Tentar Novamente</button>`
            });
        }
    });

    // Animação nos campos de input
    const inputs = document.querySelectorAll('.input-field');
    inputs.forEach(input => {
        input.addEventListener('focus', function () {
            this.parentElement.classList.add('transform', 'scale-105', 'transition-transform');
        });
        input.addEventListener('blur', function () {
            this.parentElement.classList.remove('transform', 'scale-105');
        });
    });

    // Listeners para links e botões sociais (simulado)
    document.querySelectorAll('a[href="#"], .social-btn').forEach(element => {
        element.addEventListener('click', function (e) {
            e.preventDefault();
            const text = this.textContent.trim();
            let message = 'Funcionalidade a ser implementada em breve!';

            if (text.includes('Google') || text.includes('Facebook')) {
                message = `Login com ${text} será implementado em breve!`;
            } else if (text === 'Esqueci minha senha') {
                message = 'Funcionalidade de recuperação de senha será implementada em breve!';
            } else if (text === 'Cadastre-se gratuitamente') {
                message = 'Redirecionando para a página de cadastro...';
            } else if (text.includes('Termos') || text.includes('Política')) {
                message = `Abrindo ${text}...`;
            }

            showInlineMessage(message, 'info');
        });
    });
});

// Função para mostrar mensagens inline (toast)
function showInlineMessage(message, type) {
    const existingMessage = document.querySelector('.inline-message');
    if (existingMessage) {
        existingMessage.remove();
    }

    const messageDiv = document.createElement('div');
    messageDiv.className = `inline-message fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg max-w-sm animate-pulse ${
        type === 'error' ? 'bg-red-100 text-red-800 border border-red-200' :
        'bg-blue-100 text-blue-800 border border-blue-200'
    }`;
    messageDiv.innerHTML = `
        <div class="flex items-center">
            <div class="flex-1">${message}</div>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-gray-500 hover:text-gray-700">&times;</button>
        </div>
    `;
    document.body.appendChild(messageDiv);

    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
}