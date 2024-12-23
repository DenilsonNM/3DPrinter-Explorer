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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="div-alert-registro">
  </div>

  <header class="head-main">
    <h1>Administrador Usuarios</h1>
    <a href="main_admin.php" class="logo"><i class="fa-solid fa-binoculars"></i></a>
    <a href="cerrarsesion.php" class="button-3 button-cerrarsesion" onclick="return confirm('¿Estás seguro de que desea salir?')">Salir</a>
    <div class="icon-bar" id="btn_bars_id"><i class="fa-solid fa-bars"></i></div>
  </header>

  <?php
  include "menu_admin.php";
  ?>

  <article class="arti-main">

    <details class="arti-detail" open>
      <summary class="arti-sumary">Usuarios Registrados</summary>

      <div class="arti-sum-div2">

        <table class="table_cap">

          <thead>
            <tr>
              <th>Matricula</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Institucion</th>
              <th>Carrera</th>
              <th>Semestre</th>
              <th>Correo Electronico</th>
              <th>Celular</th>
              <th>Usuario</th>
              <th></th>
              <th></th>
            </tr>
          </thead>

          <tbody>

            <?php
            require "../../conexion.php";
            $todosUsuarios = "SELECT * FROM registro ORDER BY id_registro ASC";
            $resultado = mysqli_query($conectar, $todosUsuarios);
            while ($row = mysqli_fetch_assoc($resultado)) {
            ?>

              <tr>
                <td><?php echo $row["matricula"]; ?></td>
                <td><?php echo $row["nombres"]; ?></td>
                <td><?php echo $row["p_apellido"];
                    echo " ";
                    echo $row["s_apellido"]; ?></td>
                <td><?php echo $row["institucion"]; ?></td>
                <td><?php echo $row["carrera"]; ?></td>
                <td><?php echo $row["semestre"]; ?></td>
                <td><?php echo $row["correo"]; ?></td>
                <td><?php echo $row["n_celular"]; ?></td>
                <td><?php echo $row["usuario"]; ?></td>
                <td>
                  <?php
                  echo "<a class=\"button-2\" onclick=\"return confirm('¿Realmente deseas MODIFICAR este USUARIO?')\" href='modificar_usuario.php?id_registro=" . $row['id_registro'] . "'>Modificar</a>";
                  ?>
                </td>
                <td>
                  <a class="button-4" href=" #" onClick="validar('eliminar_usuario.php?id_registro=<?php echo $row["id_registro"]; ?>')">Eliminar</a>
                </td>
              </tr>

            <?php
            }
            mysqli_free_result($resultado)
            ?>

          </tbody>

        </table>
      </div>
    </details>
  </article>

  <!-- ------------------------------------- -->

  <script>
    function validar(url) {
      var eliminar = confirm("¿Realmente deseas ELEMINAR este USUARIO?");
      if (eliminar == true) {
        window.location = url;
      }
    }

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