<?php
require "proteccion.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DPrinter Explorer 2024</title>
  <link rel="stylesheet" href="../../css/main/styles-main.css">
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
</head>

<body>

  <header class="head-main">
    <h1>Información de contacto</h1>
    <a href="main.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu.php";
  ?>

  <article class="arti-main">

    <details class="arti-detail">
      <summary class="arti-sumary">NCEI - Instituto Tecnológico de Mérida</summary>
      <div class="arti-sum-div">
        <p><span>Encargado:</span> Guillermo Nadal</p>
        <p><span>Correo del encargado:</span> gnadalgonzalez@gmail.com</p>
        <p><span>Número de telefono:</span> 9994115619</p>
        <p><span>Horarios:</span> lunes-viernes 09:00 am - 12:00 pm</p>
      </div>
      <div class="arti-sum-btn"><a href="mailto:gnadalgonzalez@gmail.com" class="button-2">Enviar Correo</a></div>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">Cl - Universidad Modelo</summary>
      <div class="arti-sum-div">
        <p><span>Encargado:</span> Francisco Roura</p>
        <p><span>Correo del encargado:</span> roura@modelo.edu.mx</p>
        <p><span>Número de telefono:</span> 9999963370</p>
        <p><span>Horarios:</span> lunes-viernes 09:00 am - 12:00 pm</p>
      </div>
      <div class="arti-sum-btn"><a href="mailto:roura@modelo.edu.mx" class="button-2">Enviar Correo</a></div>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">LIEET - Universidad Anáhuac Mayab</summary>
      <div class="arti-sum-div">
        <p><span>Encargado:</span> Mariana González</p>
        <p><span>Correo del encargado:</span> mariana.gonzalez@anahuac.mx</p>
        <p><span>Número de telefono:</span> 9999999999</p>
        <p><span>Horarios:</span> lunes-viernes 09:00 am - 12:00 pm</p>
      </div>
      <div class="arti-sum-btn"><a href="mailto:mariana.gonzalez@anahuac.mx" class="button-2">Enviar Correo</a></div>
    </details>
  </article>

</body>

</html>