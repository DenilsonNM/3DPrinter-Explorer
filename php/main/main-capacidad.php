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
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
</head>

<body>

  <header class="head-main">
    <h1>Capacidad Instalada</h1>
    <a href="main.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
  </header>

  <?php
  include "menu.php";
  ?>

  <article class="arti-main">

    <?php
    require "../conexion.php";
    ?>

    <details class="arti-detail">
      <summary class="arti-sumary">NCEI - Instituto Tecnológico de Mérida</summary>

      <div class="arti-sum-div2">

        <table class="table_cap">

          <thead>
            <tr>
              <th>Máquina</th>
              <th>Tecnología</th>
              <th>Cantidad Funcional</th>
              <th>Cantidad No Funcional</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $cap_ins = "SELECT * FROM capacidad WHERE nom_edi = 'NCEI' ORDER BY id_maquina ASC";
            $resultado = mysqli_query($conectar, $cap_ins);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <tr>
                <td><?php echo $row["maquina"]; ?></td>
                <td><?php echo $row["tecnologia"]; ?></td>
                <td><?php echo $row["cant_fun"]; ?></td>
                <td><?php echo $row["cant_no_fun"]; ?></td>
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
      <summary class="arti-sumary">CI - Universidad Modelo</summary>

      <div class="arti-sum-div2">

        <table class="table_cap">

          <thead>
            <tr>
              <th>Máquina</th>
              <th>Tecnología</th>
              <th>Cantidad Funcional</th>
              <th>Cantidad No Funcional</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $cap_ins = "SELECT * FROM capacidad WHERE nom_edi = 'CI' ORDER BY id_maquina ASC";
            $resultado = mysqli_query($conectar, $cap_ins);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <tr>
                <td><?php echo $row["maquina"]; ?></td>
                <td><?php echo $row["tecnologia"]; ?></td>
                <td><?php echo $row["cant_fun"]; ?></td>
                <td><?php echo $row["cant_no_fun"]; ?></td>
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
      <summary class="arti-sumary">LIIET - Universidad Anáhuac Mayab</summary>
      <div class="arti-sum-div2">
        <table class="table_cap">

          <thead>
            <tr>
              <th>Máquina</th>
              <th>Tecnología</th>
              <th>Cantidad Funcional</th>
              <th>Cantidad No Funcional</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $cap_ins = "SELECT * FROM capacidad WHERE nom_edi = 'LIIET' ORDER BY id_maquina ASC";
            $resultado = mysqli_query($conectar, $cap_ins);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
              <tr>
                <td><?php echo $row["maquina"]; ?></td>
                <td><?php echo $row["tecnologia"]; ?></td>
                <td><?php echo $row["cant_fun"]; ?></td>
                <td><?php echo $row["cant_no_fun"]; ?></td>
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
              </tr>
            <?php
            }
            mysqli_free_result($resultado);
            ?>
          </tbody>
        </table>
      </div>
    </details>

  </article>


</body>

</html>