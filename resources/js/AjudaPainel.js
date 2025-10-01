// Help Panel Functions
function toggleAjudaPainel() {
    const panel = document.getElementById('ajuda-painel'); 
    const overlay = document.getElementById('Ajuda-overlay');
    const button = document.getElementById('ajuda-botao'); 

    if (panel.classList.contains('translate-x-0')) {
        panel.classList.remove('translate-x-0');
        panel.classList.add('translate-x-full');
        overlay.classList.remove('opacity-100', 'pointer-events-auto');
        overlay.classList.add('opacity-0', 'pointer-events-none');
        button.style.display = 'flex';
        document.body.style.overflow = 'auto';
    } else {
        panel.classList.remove('translate-x-full');
        panel.classList.add('translate-x-0');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        overlay.classList.add('opacity-100', 'pointer-events-auto');
        button.style.display = 'none';
        document.body.style.overflow = 'hidden';
    }
}


function fillTextarea(question) {
    const messageField = document.getElementById('ajuda-mensagem');
    messageField.value = question;
    messageField.focus();
}

function mensagemAjudaEnviada() {
    const message = document.getElementById('ajuda-mensagem').value.trim();

    if (!message) {
        alert('Por favor, digite sua dúvida antes de enviar.');
        return;
    }

    // Simulate message sending
    const sendButton = document.getElementById('ajuda-mensagem-enviada');
    const originalText = sendButton.textContent;

    sendButton.textContent = 'Enviando...';
    sendButton.disabled = true;

    setTimeout(() => {
        sendButton.textContent = '✓ Enviado com sucesso!';
        sendButton.style.backgroundColor = '#00bc60';

        setTimeout(() => {
            // Reset textarea
            document.getElementById('ajuda-mensagem').value = '';
            sendButton.textContent = originalText;
            sendButton.disabled = false;
            sendButton.style.backgroundColor = '';

            // Show success message
            alert('Sua mensagem foi enviada com sucesso! Nossa equipe entrará em contato em breve.');

            // Close panel
            toggleHelpPanel();
        }, 2000);
    }, 1500);
}

// Close help panel with Escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        const panel = document.getElementById('ajuda-painel');
        if (panel.classList.contains('translate-x-0')) {
            toggleHelpPanel();
        } else {
            closeModal();
        }
    }
});

import Swal from 'sweetalert2';

document.querySelectorAll('#btn-excluir').forEach(button => {
  button.addEventListener('click', function() {
    const form = this.closest('form');
    const nome = this.dataset.nome;

    Swal.fire({
      title: `Tem certeza que deseja excluir "${nome}"?`,
      text: "Você não poderá reverter isso!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sim, excluir!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Excluído!',
          `"${nome}" foi excluído com sucesso.`,
          'success'
        ).then(() => {
          form.submit();
        });
      }
    });
  });
});
