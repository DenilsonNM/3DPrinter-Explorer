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

  <?php
  require "../../conexion.php";

  if (isset($_GET['id_maquina'])) {

    $id_maquina = $_GET['id_maquina'];

    $query = "SELECT * FROM capacidad WHERE id_maquina = $id_maquina";
    $resultado = mysqli_query($conectar, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
      $capacidad = mysqli_fetch_assoc($resultado);

      $id_maquina = $capacidad['id_maquina'];
      $maquina = $capacidad['maquina'];
      $tecnologia = $capacidad['tecnologia'];
      $cant_fun = $capacidad['cant_fun'];
      $cant_no_fun = $capacidad['cant_no_fun'];
      $nom_edi = $capacidad['nom_edi'];
    } else {
      echo "Maquina no encontrada";
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
    <h1>Modificar Capacidad</h1>
    <a href="main_admin.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion_admin.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu_admin.php";
  ?>

  <article class="arti-main">

    <details class="arti-detail" open>
      <summary class="arti-sumary">Usuarios Registrados</summary>

      <div class="arti-sum-div2">
        <form action="actualizar_capacidad.php?id_maquina= <?= $id_maquina ?>" method="POST" class="mod_form">
          <table class="table_cap">

            <thead>
              <tr>
                <th>EDI</th>
                <th>Máquina</th>
                <th>Tecnología</th>
                <th>Cantidad Funcional</th>
                <th>Cantidad No Funcional</th>
                <th></th>
              </tr>
            </thead>

            <tbody>

              <tr>
                <td><textarea name="nom_edi" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($nom_edi) ?></textarea></td>

                <td><textarea name="maquina" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($maquina) ?></textarea></td>

                <td><textarea name="tecnologia" rows="3" style="white-space: pre-wrap;" required readonly><?= htmlspecialchars($tecnologia) ?></textarea></td>

                <td><textarea name="cant_fun" style="white-space: pre-wrap;" required><?= htmlspecialchars($cant_fun) ?></textarea></td>

                <td><textarea name="cant_no_fun" style="white-space: pre-wrap;" required><?= htmlspecialchars($cant_no_fun) ?></textarea></td>

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

</body>

</html>