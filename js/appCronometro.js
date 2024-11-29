let segundos = 0;
let minutos = 0;
let horas = 0;
let intervalo;
let corriendo = false;

const cronometro = document.getElementById("cronometro");
const startButton = document.getElementById("start");
const pauseButton = document.getElementById("pause");
const resetButton = document.getElementById("reset");
const modalEncuesta = document.getElementById("modalEncuesta");
const siButton = document.getElementById("si");
const noButton = document.getElementById("no");

// Función para guardar el estado en localStorage
function guardarEstado() {
    const estado = {
        segundos,
        minutos,
        horas,
        corriendo,
    };
    localStorage.setItem("cronometroEstado", JSON.stringify(estado));
}

// Función para cargar el estado desde localStorage
function cargarEstado() {
    const estadoGuardado = localStorage.getItem("cronometroEstado");
    if (estadoGuardado) {
        const { segundos: seg, minutos: min, horas: hor, corriendo: run } = JSON.parse(estadoGuardado);
        segundos = seg;
        minutos = min;
        horas = hor;
        corriendo = run;

        actualizarTextoCronometro();
        if (corriendo) {
            iniciarCronometro();
        }
    }
}

// Actualizar la pantalla del cronómetro
function actualizarTextoCronometro() {
    cronometro.textContent =
        (horas < 10 ? "0" + horas : horas) +
        ":" +
        (minutos < 10 ? "0" + minutos : minutos) +
        ":" +
        (segundos < 10 ? "0" + segundos : segundos);
}

// Lógica del cronómetro
function actualizarCronometro() {
    segundos++;
    if (segundos === 60) {
        segundos = 0;
        minutos++;
    }
    if (minutos === 60) {
        minutos = 0;
        horas++;
    }
    actualizarTextoCronometro();
    guardarEstado(); // Guardar estado en cada actualización

    // Mostrar modal al llegar a un minuto
    if (segundos === 5) {
        clearInterval(intervalo);
        corriendo = false;
        guardarEstado();
        modalEncuesta.style.display = "flex";
    }
}

// Iniciar cronómetro
function iniciarCronometro() {
    if (!corriendo) {
        corriendo = true;
        intervalo = setInterval(actualizarCronometro, 1000);
        guardarEstado();
    }
}

// Eventos de los botones del cronómetro
startButton.addEventListener("click", iniciarCronometro);

pauseButton.addEventListener("click", () => {
    clearInterval(intervalo);
    corriendo = false;
    guardarEstado();
});

resetButton.addEventListener("click", () => {
    clearInterval(intervalo);
    corriendo = false;
    segundos = 0;
    minutos = 0;
    horas = 0;
    actualizarTextoCronometro();
    localStorage.removeItem("cronometroEstado"); // Eliminar estado al reiniciar
});

// Funcionalidad del modal
siButton.addEventListener("click", () => {
    alert("¡Gracias, Ya lo concideramos un protipado rapido!");
    modalEncuesta.style.display = "none";
    resetCronometro();
});

noButton.addEventListener("click", () => {
    alert("¡Sigue trabajando");
    modalEncuesta.style.display = "none";
    iniciarCronometro();
});

// Reiniciar cronómetro (usado al confirmar en el modal)
function resetCronometro() {
    segundos = 0;
    minutos = 0;
    horas = 0;
    actualizarTextoCronometro();
    localStorage.removeItem("cronometroEstado");
}

// Restaurar estado al cargar la página
window.addEventListener("load", cargarEstado);
