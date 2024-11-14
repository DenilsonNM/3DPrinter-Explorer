<?php
require "proteccion_admin.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DPrinter Explorer 2024</title>
  <link rel="stylesheet" href="../../../css/main/styles-main-admin.css">
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
</head>

<body>

  <header class="head-main">
    <h1>
      <?php
      echo "Bienvenido " . $_SESSION['usuario'];
      ?>
    </h1>
    <a href="#" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion_admin.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <!-- <section class="sect-main">
    <nav class="nav-main">
      <ul>
        <li><a href="main-ubicaciones.html" class="button-1"><i class="fa-solid fa-location-dot"></i></a></li>
        <li><a href="#" class="button-1"><i class="fa-solid fa-brain"></i></a></li>
        <li><a href="#" class="button-1"><i class="fa-solid fa-book-bookmark"></i></a></li>
        <li><a href="#" class="button-1"><i class="fa-solid fa-envelope"></i></a></li>
        <li><a href="#" class="button-1"><i class="fa-solid fa-database"></i></a></li>
      </ul>
    </nav>
  </section> -->

  <?php
  include "menu_admin.php";
  ?>

  <article class="arti-main">
    <h2>3DPrinter Explorer</h2>
  </article>

</body>

</html>