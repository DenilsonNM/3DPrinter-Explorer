// SCRIPT PARA LOS SELECTS 

function cargarUniversidades() {
    fetch('../php/obtener_universidades.php')
        .then(response => response.json())
        .then(data => {
            let universidadSelect = document.getElementById('universidad');
            universidadSelect.innerHTML = '<option value="">Seleccione una universidad</option>';
            data.forEach(universidad => {   
                universidadSelect.innerHTML += `<option value="${universidad.id_universidad}">${universidad.universidad}</option>`;
            });
        });
}
function cargarCarreras(id_universidad) {
    if (id_universidad) {
        fetch(`../php/obtener_carreras.php?id_universidad=${id_universidad}`)
            .then(response => response.json())
            .then(data => {
                let carreraSelect = document.getElementById('carrera');
                carreraSelect.innerHTML = '<option value="">Seleccione una carrera</option>';
                data.forEach(carrera => {
                    carreraSelect.innerHTML += `<option value="${carrera.carrera}">${carrera.carrera}</option>`;
                });
            });
    } else {
        document.getElementById('carrera').innerHTML = '<option value="">Seleccione una carrera</option>';
    }
}
document.addEventListener('DOMContentLoaded', cargarUniversidades);
