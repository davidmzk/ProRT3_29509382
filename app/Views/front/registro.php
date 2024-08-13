




<!--<section class="bg-primary-subtle">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <form id="frmregistro" class="row g-3 needs-validation bg-custom p-4" novalidate>
      <h4 >Registrate</h4>
      <div class="col-md-6">
        <label for="validationCustom01" class="form-label text-custom">Nombre</label>
        <input type="text" class="form-control text-uppercase" id="validationCustom01" required>
        <div class="valid-feedback">Gracias!</div>
        <div class="invalid-feedback">Por favor ingrese su nombre.</div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label text-custom">Apellido</label>
        <input type="text" class="form-control text-uppercase" id="validationCustom02" required>
        <div class="valid-feedback">Gracias!</div>
        <div class="invalid-feedback">Por favor ingrese su apellido.</div>
      </div>
      <div class="col-md-12">
        <label for="validationCustomEmail" class="form-label text-custom">Correo Electrónico</label>
        <input type="email" class="form-control" id="validationCustomEmail" required>
        <div class="valid-feedback">Correo válido.</div>
        <div class="invalid-feedback">Por favor ingrese un correo electrónico válido.</div>
      </div>
      <div class="col-md-12">
        <label for="validationCustomUsername" class="form-label text-custom">Usuario</label>
        <input type="text" class="form-control" id="validationCustomUsername" required>
        <div class="valid-feedback">Nombre de usuario válido.</div>
        <div class="invalid-feedback">Por favor ingrese un nombre de usuario.</div>
      </div>
      <div class="col-md-12">
        <label for="validationCustomPassword" class="form-label text-custom">Contraseña</label>
        <input type="password" class="form-control" id="validationCustomPassword" required>
        <div class="valid-feedback">Contraseña válida.</div>
        <div class="invalid-feedback">Por favor ingrese una contraseña.</div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary btn-custom" type="submit">Enviar formulario</button>
      </div>
    </form>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  (function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
    
    // Convert to uppercase
    const uppercaseInputs = document.querySelectorAll('.text-uppercase');
    uppercaseInputs.forEach(input => {
      input.addEventListener('input', (event) => {
        event.target.value = event.target.value.toUpperCase();
      });
    });
  })()
</script>