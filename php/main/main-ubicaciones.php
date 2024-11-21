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
      <summary class="arti-sumary">NCEI - Instituto Tecnológico de Mérida</summary>
      <div class="arti-sum-div">
        <p>El Nodo de Creatividad, Innovación y Emprendedurismo, ubicado en la
          Avenida Tecnológico (Calle 60) Sn, 97118 Mérida, Yucatán México.</p>
        <br>
        <div class="sum-div-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.995270132126!2d-89.62461002831736!3d21.01276538243268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a65077d641%3A0x39dfe74777312656!2sTecNM%20-%20Campus%20M%C3%A9rida!5e0!3m2!1ses-419!2smx!4v1732153115749!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">CI - Universidad Modelo</summary>
      <div class="arti-sum-div">
        <p>El Centro de Inovación, ubicado en la Antigua A Cholul s/n 97305 Mérida, México</p>
        <br>
        <div class="sum-div-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6263.1976167087505!2d-89.56767465715083!3d21.027900620907637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56776b58d5a3a7%3A0x3a4b86a60d39e603!2sUniversidad%20Modelo!5e0!3m2!1ses-419!2smx!4v1732153245692!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </details>

    <details class="arti-detail">
      <summary class="arti-sumary">LIIET - Universidad Anáhuac Mayab</summary>
      <div class="arti-sum-div">
        <p>EL Laboratorio de Inteligencia, Innovación Educativa y Tecnológica, ubicado en la carretera Mérida-Progreso km 15.5</p>
        <br>
        <div class="sum-div-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17705.343430432804!2d-89.61411424811263!3d21.108979547312618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f55d8bbf2392197%3A0xd7e0815b0417d0ab!2sUniversidad%20An%C3%A1huac%20Mayab!5e0!3m2!1ses-419!2smx!4v1732153335041!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </details>
  </article>

</body>

</html>