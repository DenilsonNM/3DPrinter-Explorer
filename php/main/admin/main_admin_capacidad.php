<?php
require "proteccion_admin.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>3DPrinter Explorer 2024</title>
  <link rel="stylesheet" href="../../../css/main/styles-main-admin.css?v=1">
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="div-alert-registro">
  </div>

  <header class="head-main">
    <h1>Capacidad Instalada</h1>
    <a href="main_admin.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion_admin.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu_admin.php";
  ?>

  <article class="arti-main">

    <?php
    require "../../conexion.php";
    ?>

    <details class="arti-detail">
      <summary class="arti-sumary">Todos los EDI</summary>
      <div class="arti-sum-div2">
        <table class="table_cap">

          <thead>
            <tr>
              <th>EDI</th>
              <th>Máquina</th>
              <th>Tecnología</th>
              <th>Cantidad Funcional</th>
              <th>Cantidad No Funcional</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            <?php
            $cap_ins = "SELECT * FROM capacidad ORDER BY id_maquina ASC";
            $resultado = mysqli_query($conectar, $cap_ins);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <tr>
                <td><?php echo $row["nom_edi"]; ?></td>
                <td><?php echo $row["maquina"]; ?></td>
                <td><?php echo $row["tecnologia"]; ?></td>
                <td><?php echo $row["cant_fun"]; ?></td>
                <td><?php echo $row["cant_no_fun"]; ?></td>
                <td>
                  <?php
                  echo "<a class=\"button-2\" onclick=\"return confirm('¿Realmente deseas MODIFICAR?')\" href='modificar_capacidad.php?id_maquina=" . $row['id_maquina'] . "'>Modificar</a>";
                  ?>
                </td>
                <td>
                  <a class="button-4" href=" #" onClick="validar('eliminar_capacidad.php?id_maquina=<?php echo $row["id_maquina"]; ?>')">Eliminar</a>
                </td>
              </tr>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
          </tbody>
        </table>
      </div>
    </details>

    <!-- ------------------------------------- -->

    <details class="arti-detail">
      <summary class="arti-sumary">Añadir Capacidad</summary>
      <div class="arti-sum-div2">

        <form class="arti-form" action="guardar_capacidad.php" method="POST">

          <p>EDI:</p>
          <select name="nom_edi" required>
            <option value="NCEI">NCEI</option>
            <option value="CI">CI</option>
            <option value="LIIET">LIIET</option>
          </select>

          <p>Máquina:</p>
          <input type="text" name="maquina" required>

          <p>Tecnología:</p>
          <input type="text" name="tecnologia" required>

          <p>Cantidad Funcional:</p>
          <input type="text" name="cant_fun" required>

          <p>Cantidad No Funcional:</p>
          <input type="text" name="cant_no_fun" required>
          <br>
          <button type="submit" class="button-5" onclick="return confirm('¿Estás seguro de que desea continuar')">Guardar</button>
        </form>
      </div>
    </details>

  </article>

  <!-- ------------------------------------- -->

  <script>
    function validar(url) {
      var eliminar = confirm("¿Realmente deseas ELEMINAR esta FILA?");
      if (eliminar == true) {
        window.location = url;
      }
    }
  </script>

</body>

</html>