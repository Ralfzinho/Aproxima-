// confirm-actions.js
(function () {
  if (window.__confirmActionsBound) return;
  window.__confirmActionsBound = true;

  // Helpers para ler datasets com fallback
  function getText(el, key, fallback) {
    return (el && el.dataset && el.dataset[key]) || fallback;
  }

  // 1) Confirmar navegação para edição: <a data-swal-edit>
  document.addEventListener('click', function (e) {
    const link = e.target.closest('a[data-swal-edit]');
    if (!link) return;

    e.preventDefault();

    Swal.fire({
      title: getText(link, 'title', 'Editar registro?'),
      text:  getText(link, 'text',  'Você será levado ao formulário de edição.'),
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: getText(link, 'confirm', 'Ir para edição'),
      cancelButtonText:  getText(link, 'cancel',  'Cancelar')
    }).then((r) => {
      if (r.isConfirmed) window.location.href = link.href;
    });
  });

  // 2) Confirmar salvamento no form de edição: <button data-swal-save>
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('button[data-swal-save]');
    if (!btn) return;

    e.preventDefault();
    const form = btn.closest('form');
    if (!form) return;

    Swal.fire({
      title: getText(btn, 'title', 'Confirmar alterações?'),
      text:  getText(btn, 'text',  'As mudanças serão salvas.'),
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: getText(btn, 'confirm', 'Salvar'),
      cancelButtonText:  getText(btn, 'cancel',  'Cancelar')
    }).then((r) => {
      if (r.isConfirmed) form.submit();
    });
  });

  // 3) Confirmar exclusão (Laravel DELETE): <button data-swal-delete>
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('button[data-swal-delete]');
    if (!btn) return;

    e.preventDefault();
    const form = btn.closest('form');
    if (!form) return;

    Swal.fire({
      title: getText(btn, 'title', 'Tem certeza?'),
      text:  getText(btn, 'text',  'Essa ação não poderá ser desfeita.'),
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: getText(btn, 'confirmColor', '#3085d6'),
      cancelButtonColor:  getText(btn, 'cancelColor',  '#d33'),
      confirmButtonText: getText(btn, 'confirm', 'Sim, confirmar'),
      cancelButtonText:  getText(btn, 'cancel',  'Cancelar')
    }).then((r) => {
      if (r.isConfirmed) form.submit();
    });
  });

  // 4) Flash de sucesso/erro via marcadores invisíveis (opcional)
  document.addEventListener('DOMContentLoaded', function () {
    const ok  = document.getElementById('flash-success');
    const err = document.getElementById('flash-error');

    if (ok && ok.dataset.message) {
      Swal.fire({ icon: 'success', title: ok.dataset.message, timer: 2000, showConfirmButton: false });
    }
    if (err && err.dataset.message) {
      Swal.fire({ icon: 'error', title: 'Ops...', html: err.dataset.message });
    }
  });
})();
