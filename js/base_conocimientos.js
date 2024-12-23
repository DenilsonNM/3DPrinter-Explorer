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
        responseText = 'Te gusta la programación, prefieres trabajar en equipo y usas Java.';
    } else if (q1 === 'yes' && q2 === 'yes' && q3 === 'no') {
        responseText = 'Te gusta la programación, prefieres trabajar en equipo, pero no usas Java.';
    } else if (q1 === 'yes' && q2 === 'no' && q3 === 'yes') {
        responseText = 'Te gusta la programación, prefieres trabajar solo y usas Java.';
    } else if (q1 === 'yes' && q2 === 'no' && q3 === 'no') {
        responseText = 'Te gusta la programación, prefieres trabajar solo y no usas Java.';
    } else if (q1 === 'no' && q2 === 'yes' && q3 === 'yes') {
        responseText = 'No te gusta la programación, pero prefieres trabajar en equipo y usas Java.';
    } else if (q1 === 'no' && q2 === 'yes' && q3 === 'no') {
        responseText = 'No te gusta la programación, prefieres trabajar en equipo, pero no usas Java.';
    } else if (q1 === 'no' && q2 === 'no' && q3 === 'yes') {
        responseText = 'No te gusta la programación, prefieres trabajar solo y usas Java.';
    } else if (q1 === 'no' && q2 === 'no' && q3 === 'no') {
        responseText = 'No te gusta la programación, prefieres trabajar solo y no usas Java.';
    }

    document.getElementById('responseText').innerText = responseText;
    document.getElementById('response').classList.remove('hidden');
}
