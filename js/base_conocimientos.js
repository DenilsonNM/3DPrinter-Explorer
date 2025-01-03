function processForm() {
    const q1 = document.querySelector('input[name="question1"]:checked')?.value;
    const q2 = document.querySelector('input[name="question2"]:checked')?.value;
    const q3 = document.querySelector('input[name="question3"]:checked')?.value;

    if (!q1 || !q2 || !q3) {
        alert('Por favor, responde todas las preguntas.');
        return;
    }

    let responseText = '';

    // Lógica para todas las combinaciones posibles
    if (q1 === 'yes' && q2 === 'yes' && q3 === 'yes') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'yes' && q2 === 'yes' && q3 === 'no') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'yes' && q2 === 'no' && q3 === 'yes') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'yes' && q2 === 'no' && q3 === 'no') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'no' && q2 === 'yes' && q3 === 'yes') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'no' && q2 === 'yes' && q3 === 'no') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'no' && q2 === 'no' && q3 === 'yes') {
        responseText = 'La configuración que debes utilizar es:';
    } else if (q1 === 'no' && q2 === 'no' && q3 === 'no') {
        responseText = 'La configuración que debes utilizar es:';
    }

    document.getElementById('responseText').innerText = responseText;
    document.getElementById('response').classList.remove('hidden');
}
