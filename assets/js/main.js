document.addEventListener('DOMContentLoaded', function () {
  //Busca todos los formularios (los del panel de Registro)
  var forms = document.querySelectorAll('form[data-demo-form]');

  forms.forEach(function (form) {
    form.addEventListener('submit', function (event) {
      //Evita el envío
      event.preventDefault();

      //Muestra el cartel de éxito asociado a este formulario
      var successBox = document.querySelector(form.dataset.demoForm);
      if (successBox) {
        successBox.classList.add('show');
      }

    
      //Limpia para dejar el formulario listo de nuevo
      form.reset();
    });
  });
});
