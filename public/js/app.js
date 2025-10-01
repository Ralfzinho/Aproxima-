
document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');
    if (btn && menu) btn.addEventListener('click', () => menu.classList.toggle('hidden'));
});




document.querySelectorAll('.btn-excluir').forEach(button => {
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
