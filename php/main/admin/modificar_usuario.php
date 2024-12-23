<?php
require "proteccion_admin.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DPrinter Explorer 2024</title>
  <link rel="stylesheet" href="../../../css/main/styles-main.css">
  <link rel="stylesheet" href="../../../css/main/styles-main-admin.css">
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

  <?php
  require "../../conexion.php";

  if (isset($_GET['id_registro'])) {

    $id_registro = $_GET['id_registro'];

    $query = "SELECT * FROM registro WHERE id_registro = $id_registro";
    $resultado = mysqli_query($conectar, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
      $registro = mysqli_fetch_assoc($resultado);

      $id_registro = $registro['id_registro'];
      $matricula = $registro['matricula'];
      $nombres = $registro['nombres'];
      $p_apellido = $registro['p_apellido'];
      $s_apellido = $registro['s_apellido'];
      $institucion = $registro['institucion'];
      $carrera = $registro['carrera'];
      $semestre = $registro['semestre'];
      $correo = $registro['correo'];
      $n_celular = $registro['n_celular'];
      $usuario = $registro['usuario'];
      $contrasena = $registro['contrasena'];
    } else {
      echo "Usuario no encontrado";
      exit;
    }
  } else {
    echo "No se proporcionaron parámetros en la URL";
    exit;
  }
  ?>

  <div class="div-alert-registro">
  </div>

  <header class="head-main">
    <h1>Modificar Usuario</h1>
    <a href="main_admin.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3 button-cerrarsesion" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
    <div class="icon-bar" id="btn_bars_id"><i class="fa-solid fa-bars"></i></div>
  </header>

  <?php
  include "menu_admin.php";
  ?>

  <article class="arti-main">

    <details class="arti-detail" open>
      <summary class="arti-sumary">Usuario a Modificar</summary>

      <div class="arti-sum-div2">
        <form action="actualizar_usuario.php?id_registro= <?= $id_registro ?>" method="POST" class="mod_form">
          <table class="table_cap">

            <thead>
              <tr>
                <th>Matricula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Institución</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Correo Electronico</th>
                <th>Celular</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th></th>
              </tr>
            </thead>

            <tbody>

              <tr>

                <td><textarea name="matricula" rows="1" cols="15" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($matricula) ?></textarea></td>

                <td><textarea name="nombres" rows="3" cols="15" style="white-space: pre-wrap;" required><?= htmlspecialchars($nombres) ?></textarea></td>

                <td>
                  <textarea name="p_apellido" rows="1" cols="15" style="white-space: pre-wrap;" required><?= htmlspecialchars($p_apellido) ?></textarea>
                  <textarea name="s_apellido" rows="1" cols="15" style="white-space: pre-wrap;"><?= htmlspecialchars($s_apellido) ?></textarea>
                </td>

                <td><textarea name="institucion" rows="4" cols="30" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($institucion) ?></textarea></td>

                <td><textarea name="carrera" rows="5" cols="55" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($carrera) ?></textarea></td>

                <td><textarea name="semestre" rows="1" cols="5" style="white-space: pre-wrap;" required><?= htmlspecialchars($semestre) ?></textarea></td>

                <td><textarea name="correo" rows="4" cols="20" style="white-space: pre-wrap;" required><?= htmlspecialchars($correo) ?></textarea></td>

                <td><textarea name="n_celular" rows="1" cols="30" style="white-space: pre-wrap;" required><?= htmlspecialchars($n_celular) ?></textarea></td>

                <td><textarea name="usuario" rows="1" cols="20" style="white-space: pre-wrap;" required><?= htmlspecialchars($usuario) ?></textarea></td>

                <td><textarea name="contrasena" rows="1" cols="10" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($contrasena) ?></textarea></td>

                <td>
                  <button class="button-2" type="submit" onclick="return confirm('¿Estás seguro de que desea continuar?')">Actualizar</button>
                </td>
              </tr>
              <?php
              mysqli_free_result($resultado)
              ?>

            </tbody>

          </table>
          <button class="button-4 btn-res" type="reset" onclick="return confirm('¿Estás seguro de que desea RESTABLECER?')">Restablecer</button>
        </form>
      </div>
    </details>
  </article>

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