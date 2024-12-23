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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

  <header class="head-main">
    <h1>Sistema Experto</h1>
    <a href="main.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3 button-cerrarsesion" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
    <div class="icon-bar" id="btn_bars_id"><i class="fa-solid fa-bars"></i></div>
  </header>

  <?php
  include "menu.php";
  ?>

  <article class="arti-main">
    <div class="sisexp">

      <form id="expertForm">
        <label for="question1">¿Qué atributo estás buscando?</label><br>
        <label>
          <input type="radio" id="q1_yes" name="question1" value="yes">
          Material (Funcionalidad del modelo)
        </label><br>
        <label>
          <input type="radio" id="q1_no" name="question1" value="no">
          Dimensional (Parecido al modelo)
        </label><br><br>

        <label for="question2">¿Qué mejorarías con el prototipo?</label><br>
        <label>
          <input type="radio" id="q2_yes" name="question2" value="yes">
          Aprendizaje
        </label><br>
        <label>
          <input type="radio" id="q2_no" name="question2" value="no">
          Comunicación
        </label><br><br>

        <label for="question3">¿Cuántas veces has fabricado el prototipo?</label><br>
        <label>
          <input type="radio" id="q3_yes" name="question3" value="yes">
          1 vez
        </label><br>
        <label>
          <input type="radio" id="q3_no" name="question3" value="no">
          2 o más
        </label><br><br>

        <button type="button" onclick="processForm()">Respuesta</button>
      </form>


      <div id="response" class="hidden">
        <p id="responseText"></p>
      </div>
    </div>
  </article>

  <script src="../../js/base_conocimientos.js"></script>
  <script>
    $("#btn_bars_id").click(function() {
      $("#nav_menu_id").addClass("mostrar");
      $("#cerrar_menu_id").addClass("mostrar_back");
    })

    window.onclick = function(event) {
      if (event.target == cerrar_menu_id) {
        $("#nav_menu_id").removeClass("mostrar")
        $("#cerrar_menu_id").removeClass("mostrar_back")
      }
    }
  </script>
</body>

</html>