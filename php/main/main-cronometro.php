<?php
require "proteccion.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/main/styles-main.css">
    <link rel="stylesheet" href="../../css/main/styles-main-cronometro.css">
    <script src="https://kit.fontawesome.com/c35572497d.js"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <title>3DPrinter Explorer 2024</title>
</head>

<body>
    <header class="head-main">
        <h1>Cronómetro</h1>
        <a href="main.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
        <a href="cerrarsesion.php" class="button-3 button-cerrarsesion" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
        <div class="icon-bar"><i class="fa-solid fa-bars"></i></div>
    </header>

    <?php
    include "menu.php"
    ?>

    <div class="cronometro-container ancho">
        <div id="cronometro">00:00:00</div>
        <div class="botones">
            <button id="start">Iniciar</button>
            <button id="pause">Pausar</button>
            <button id="reset">Reiniciar</button>
        </div>
    </div>

    <div id="modalEncuesta" class="modal">
        <div class="modal-content">
            <h2>¿TERMINASTE?</h2>
            <br>
            <p>¿FINALIZASTE TU PROTOTIPO EN MENOS DE 24 HORAS?</p>
            <button id="si">Sí</button>
            <button id="no">No</button>
        </div>
    </div>
    <script src="../../js/appCronometro.js"></script>
</body>

</html>