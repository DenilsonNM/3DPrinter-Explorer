// SCRIPT PARA LOS SELECTS 

function cargarUniversidades() {
    fetch('../php/obtener_universidades.php')
        .then(response => response.json())
        .then(data => {
            let universidadSelect = document.getElementById('universidad');
            universidadSelect.innerHTML = '<option value="">Seleccione una universidad</option>';
            data.forEach(universidad => {   
                universidadSelect.innerHTML += `<option value="${universidad.universidad}">${universidad.universidad}</option>`;
            });
        });
}
document.addEventListener('DOMContentLoaded', cargarUniversidades);
