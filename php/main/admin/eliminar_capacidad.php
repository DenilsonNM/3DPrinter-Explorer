<?php
require "../../conexion.php";

$id_maquina =  $_GET["id_maquina"];

$consulta = "DELETE FROM capacidad WHERE id_maquina = '$id_maquina'";

$resultado = mysqli_query($conectar, $consulta);

if ($resultado) {
  include("main_admin_capacidad.php");
?>
  <div class="alert-capacidad">
    <h1>Fila Eliminada</h1>
  </div>
  <script>
    setTimeout(function() {
      window.location.href = 'main_admin_capacidad.php';
    }, 2000);
  </script>
<?php
  exit;
} else {
  include("main_admin_capacidad.php");
?>
  <div class="alert-capacidad">
    <h1>Error al eliminar fila</h1>
  </div>
  <script>
    setTimeout(function() {
      window.location.href = 'main_admin_capacidad.php';
    }, 2000);
  </script>
<?php
  exit;
}
?>