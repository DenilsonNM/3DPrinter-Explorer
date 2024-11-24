<?php
require "proteccion.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DPrinter Explorer 2024</title>
  <link rel="stylesheet" href="../../css/main/styles-main.css?v=1">
  <link rel="stylesheet" href="../../css/main/styles-main-guias.css?v=1">
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
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

  <section class="sec-pdf">
    <article class="art-pdf" id="btn_modal1">
      <figure>
        <img src="..\..\pictures\guiaM1.png" alt="">
      </figure>
      <div class="pdf-info">
        <p><span>TITULO:</span> </p><br>
        <p><span>DESCRIPCIÓN:</span> </p>
      </div>
    </article>

    <article class="art-pdf" id="btn_modal2">
      <figure>
        <img src="..\..\pictures\guiaM2.png" alt="">
      </figure>
      <div class="pdf-info">
        <p><span>TITULO:</span> </p><br>
        <p><span>DESCRIPCIÓN:</span> </p>
      </div>
    </article>

    <article class="art-pdf" id="btn_modal3">
      <figure>
        <img src="..\..\pictures\guia_STL.png" alt="">
      </figure>
      <div class="pdf-info">
        <p><span>TITULO:</span> </p><br>
        <p><span>DESCRIPCIÓN:</span> </p>
      </div>
    </article>
  </section>


  <!-- ------------------------------------- -->

  <!-- DOCUMENTO 1 -->
  <section class="modal_padre" id="cont_modal1">
    <article class="modal">
      <div class="cerrar">
        <h2>TITULO</h2>
        <a href="#" id="cerrar_modal1"><i class="fa-solid fa-circle-xmark"></i></a>
      </div>
      <iframe src=" ../../docs/modulo1.pdf" title="PDF Viewer"></iframe>
    </article>
  </section>

  <!-- DOCUMENTO 2 -->

  <section class="modal_padre" id="cont_modal2">
    <article class="modal">
      <div class="cerrar">
        <h2>TITULO</h2>
        <a href="#" id="cerrar_modal2"><i class="fa-solid fa-circle-xmark"></i></a>
      </div>
      <iframe src=" ../../docs/modulo2.pdf" title="PDF Viewer"></iframe>
    </article>
  </section>

  <!-- DOCUMENTO 3 -->

  <section class="modal_padre" id="cont_modal3">
    <article class="modal">
      <div class="cerrar">
        <h2>TITULO</h2>
        <a href="#" id="cerrar_modal3"><i class="fa-solid fa-circle-xmark"></i></a>
      </div>
      <iframe src=" ../../docs/GUIA_STL.pdf" title="PDF Viewer"></iframe>
    </article>
  </section>

  <!-- ------------------------------------- -->

  <article class="arti-main">
    <figure>
      <p>REPOSITORIO MODELOS GRABCAD</p>
      <a href="https://grabcad.com/library" target="_blank"><img src="../../pictures/grabcad-removebg-preview.png" alt=""></a>
    </figure>

    <figure>
      <p>REPOSITORIO TUTORIALES GRABCAD</p>
      <a href="https://grabcad.com/tutorials" target="_blank"><img src="../../pictures/grabcad-removebg-preview.png" alt=""></a>
    </figure>
  </article>

  <script>
    // SCRIPT DOCUMENTO 1
    $(document).ready(function() {
      $("#btn_modal1").click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del enlace
        $("#cont_modal1").addClass('mostrar');
      });

      $("#cerrar_modal1").click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado
        $("#cont_modal1").removeClass('mostrar');
      });

      // Cerrar el modal al hacer clic fuera del contenido
      $(window).click(function(e) {
        if ($(e.target).is("#cont_modal1")) {
          $("#cont_modal1").removeClass('mostrar');
        }
      });
    });

    //SCRIPT DOCUMENTO 2
    $(document).ready(function() {
      $("#btn_modal2").click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del enlace
        $("#cont_modal2").addClass('mostrar');
      });

      $("#cerrar_modal2").click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado
        $("#cont_modal2").removeClass('mostrar');
      });

      // Cerrar el modal al hacer clic fuera del contenido
      $(window).click(function(e) {
        if ($(e.target).is("#cont_modal2")) {
          $("#cont_modal2").removeClass('mostrar');
        }
      });
    });

    // SCRIPT DOCUMENTO 3
    $(document).ready(function() {
      $("#btn_modal3").click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado del enlace
        $("#cont_modal3").addClass('mostrar');
      });

      $("#cerrar_modal3").click(function(e) {
        e.preventDefault(); // Evita el comportamiento predeterminado
        $("#cont_modal3").removeClass('mostrar');
      });

      // Cerrar el modal al hacer clic fuera del contenido
      $(window).click(function(e) {
        if ($(e.target).is("#cont_modal3")) {
          $("#cont_modal3").removeClass('mostrar');
        }
      });
    });
  </script>
</body>

</html>