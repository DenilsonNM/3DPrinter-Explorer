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
  <link rel="stylesheet" href="../../css/main/styles-sistema-experto.css">
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

      <form id="expertForm" class="form_sisexp">

        <fieldset>
          <label class="label_qtn" for="question1">¿Qué atributo estás buscando?</label><br>
          <label class="radio-btn">
            <input type="radio" id="q1_yes" name="question1" value="yes">
            <span>Material (Funcionalidad del modelo)</span>
          </label>
          <label class="radio-btn">
            <input type="radio" id="q1_no" name="question1" value="no">
            <span>Dimensional (Parecido al modelo)</span>
          </label>
        </fieldset>

        <fieldset>
          <label class="label_qtn" for="question2">¿Qué mejorarías con el prototipo?</label><br>
          <label class="radio-btn">
            <input type="radio" id="q2_yes" name="question2" value="yes">
            <span>Aprendizaje</span>
          </label>
          <label class="radio-btn">
            <input type="radio" id="q2_no" name="question2" value="no">
            <span>Comunicación</span>
          </label>
        </fieldset>

        <fieldset>
          <label class="label_qtn" for="question3">¿Cuántas veces has fabricado el prototipo?</label><br>
          <label class="radio-btn">
            <input type="radio" id="q3_yes" name="question3" value="yes">
            <span>1 vez</span>
          </label>
          <label class="radio-btn">
            <input type="radio" id="q3_no" name="question3" value="no">
            <span>2 o más</span>
          </label>
        </fieldset>

        <div class="div_sisexp_btns">
          <button type="button" class="button-4" onclick="processForm()">Respuesta</button>
          <button type="button" onclick="if (confirm('¿Estás seguro de que desea reiniciar?')) { window.location.href='main-sistema-experto.php'; }" class="button-4">Reiniciar</button>
        </div>
      </form>


      <div id="response" class="div_resp">
        <p id="responseText"><span class="puntos">---</span></p>
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

    document.addEventListener("DOMContentLoaded", function() {
      const fieldsets = document.querySelectorAll("fieldset");
      let currentStep = 0;

      // Muestra solo el primer fieldset al inicio
      fieldsets[currentStep].classList.add("active");

      // Añade eventos a los inputs dentro de los fieldsets
      fieldsets.forEach((fieldset, index) => {
        const inputs = fieldset.querySelectorAll("input[type='radio']");
        inputs.forEach(input => {
          input.addEventListener("change", () => {
            if (index < fieldsets.length - 1) {
              fieldsets[currentStep].classList.remove("active");
              currentStep++;
              fieldsets[currentStep].classList.add("active");
            } else {
              // Cuando se selecciona una respuesta en el último fieldset
              document.getElementById("response").classList.remove("hidden");
              document.getElementById("responseText").textContent = "Haz click en el boton ''Respuesta'' para obtener el resultado";
            }
          });
        });
      });
    });
  </script>
</body>

</html>