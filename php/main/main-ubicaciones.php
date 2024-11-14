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
    <h1>Ubicaciones de impresoras</h1>
    <a href="main.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu.php";
  ?>

  <article class="arti-main">

    <details class="arti-detail">
      <summary class="arti-sumary">Instituto Tecnológico de Mérida</summary>
      <div class="arti-sum-div">
        <p>Instituto Tecnológico de Mérida (Campus Norte), del departamento de ingeniería eléctrica y electrónica.
          Ubicado en la
          Avenida Tecnológico (Calle 60) Sn, 97118 Mérida, Yucatán México.</p>
        <div class="sum-div-map">
        </div>
      </div>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">Universidad Modelo</summary>
      <div class="arti-sum-div">
        <p>Instituto Tecnológico de Mérida (Campus Norte), del departamento de ingeniería eléctrica y electrónica.
          Ubicado en la
          Avenida Tecnológico (Calle 60) Sn, 97118 Mérida, Yucatán México.</p>
        <div class="sum-div-map">
        </div>
      </div>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">Universidad Anáhuac Mayab</summary>
      <div class="arti-sum-div">
        <p>Instituto Tecnológico de Mérida (Campus Norte), del departamento de ingeniería eléctrica y electrónica.
          Ubicado en la
          Avenida Tecnológico (Calle 60) Sn, 97118 Mérida, Yucatán México.</p>
        <div class="sum-div-map">
        </div>
      </div>
    </details>
  </article>

</body>

</html>