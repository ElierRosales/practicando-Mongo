function showAlert(title, text, form) {
    Swal.fire({
        title: title,
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(); // Si el usuario confirma, envía el formulario
        }
    });
}

document.querySelectorAll('.delete-button').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault(); // Previene el envío inmediato del formulario
        const form = this.closest('form'); // Encuentra el formulario padre

        // Llama a la función de alerta con los parámetros necesarios
        showAlert(
            '¿Realmente deseas eliminar el registro?',
            'Si eliminas este registro no podrás recuperarlo.',
            form
        );
    });
});
