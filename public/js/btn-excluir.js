document.addEventListener("click", function (e) {
  const btn = e.target.closest("button[data-swal-delete]");
  if (!btn) return;

  e.preventDefault();
  const form = btn.closest("form");
  if (!form) return;

  Swal.fire({
    title: "Tem certeza?",
    text: "Essa ação não poderá ser desfeita.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sim, excluir",
    cancelButtonText: "Cancelar"
  }).then((result) => {
    if (result.isConfirmed) form.submit();
  });
});

document.addEventListener('DOMContentLoaded', function () {
  const ok = document.getElementById('flash-success');
  if (ok && ok.dataset.message) {
    Swal.fire({
      icon: 'success',
      title: ok.dataset.message,
      timer: 2000,
      showConfirmButton: false
    });
  }

  const err = document.getElementById('flash-error');
  if (err && err.dataset.message) {
    Swal.fire({
      icon: 'error',
      title: 'Ops...',
      html: err.dataset.message
    });
  }
});

