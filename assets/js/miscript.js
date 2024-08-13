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