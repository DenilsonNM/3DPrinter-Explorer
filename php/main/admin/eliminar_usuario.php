<?php
require "../../conexion.php";

$id_registro =  $_GET["id_registro"];

$consulta = "DELETE FROM registro WHERE id_registro = '$id_registro'";

$resultado = mysqli_query($conectar, $consulta);

if ($resultado) {
  include("main_admin_usuarios.php");
?>
  <div class="alert-registro">
    <h1>Usuario Eliminado</h1>
  </div>
  <script>
    setTimeout(function() {
      window.location.href = 'main_admin_usuarios.php';
    }, 2000);
  </script>
<?php
  exit;
} else {
  include("main_admin_usuarios.php");
?>
  <div class="alert-registro">
    <h1>Error al eliminar</h1>
  </div>
  <script>
    setTimeout(function() {
      window.location.href = 'main_admin_usuarios.php';
    }, 2000);
  </script>
<?php
  exit;
}
?>