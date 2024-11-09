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
    <a href="../../index.html" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu.php";
  ?>

  <article class="arti-main">

    <details class="arti-detail">
      <summary class="arti-sumary">EDI - Instituto Tecnológico de Mérida</summary>
      <div class="arti-sum-div">
        <p><span>Encargado:</span> nombres apellidos</p>
        <p><span>Correo del encargado:</span> ejemplo@ejemplo.com</p>
        <p><span>Número de telefono:</span> 999-999-9999</p>
        <p><span>Horarios:</span> lunes-viernes 09:00 am - 12:00 pm</p>
      </div>
      <a href="mailto:ejemplo@ejemplo.com" class="button-2">Enviar Correo</a>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">EDI - Universidad Modelo</summary>
      <div class="arti-sum-div">
        <p><span>Encargado:</span> nombres apellidos</p>
        <p><span>Correo del encargado:</span> ejemplo@ejemplo.com</p>
        <p><span>Número de telefono:</span> 999-999-9999</p>
        <p><span>Horarios:</span> lunes-viernes 09:00 am - 12:00 pm</p>
      </div>
      <a href="mailto:ejemplo@ejemplo.com" class="button-2">Enviar Correo</a>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">EDI - Universidad Anáhuac Mayab</summary>
      <div class="arti-sum-div">
        <p><span>Encargado:</span> nombres apellidos</p>
        <p><span>Correo del encargado:</span> ejemplo@ejemplo.com</p>
        <p><span>Número de telefono:</span> 999-999-9999</p>
        <p><span>Horarios:</span> lunes-viernes 09:00 am - 12:00 pm</p>
      </div>
      <a href="mailto:ejemplo@ejemplo.com" class="button-2">Enviar Correo</a>
    </details>
  </article>

</body>

</html>