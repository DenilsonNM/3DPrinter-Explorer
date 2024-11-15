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
    <h1>Guías y Tutoriales</h1>
    <a href="main.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu.php";
  ?>

  <article class="arti-main">
    <a href="https://grabcad.com/library" target="_blank">Repo GRABCAD</a>
    <a href="https://grabcad.com/tutorials" target="_blank">Tutos GRABCAD</a>
    <iframe src=" ../../docs/FLUJOGRAMA DE PROYECTO INTEGRADOR.pdf" width="600" height="400" title="PDF Viewer"></iframe>
  </article>

</body>

</html>