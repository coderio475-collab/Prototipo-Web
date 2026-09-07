document.addEventListener('DOMContentLoaded', function () {
  var formularios = document.querySelectorAll('form[data-demo-form]');
  var parametros = new URLSearchParams(window.location.search);
  var resultado = parametros.get('registro');
  var tipo = parametros.get('tipo') || 'estudiante';

  formularios.forEach(function (formulario) {
    formulario.addEventListener('input', function (event) {
      event.target.setCustomValidity('');
    });

    formulario.addEventListener('submit', function (event) {
      var campos = formulario.querySelectorAll('input:not([type="hidden"]), select, textarea');

      for (var indice = 0; indice < campos.length; indice += 1) {
        var campo = campos[indice];

        if (campo.value.trim() === '') {
          event.preventDefault();
          campo.setCustomValidity('Este campo no puede estar vacío.');
          campo.reportValidity();
          return;
        }
      }
    });
  });

  if (resultado === 'ok') {
    var successBox = document.querySelector('#' + tipo + '-success');
    if (successBox) {
      successBox.classList.add('show');
    }
  }

  if (resultado === 'error') {
    window.alert('No se pudo guardar el registro. Verificá los datos e intentá nuevamente.');
  }
});
