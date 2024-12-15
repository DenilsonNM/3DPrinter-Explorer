<?php
require "../../conexion.php";


$id_maquina = $_GET['id_maquina'];

// $maquina = $_POST['maquina'];
// $tecnologia = $_POST['tecnologia'];
// $nom_edi = $_POST['nom_edi'];
$cant_fun = $_POST['cant_fun'];
$cant_no_fun = $_POST['cant_no_fun'];

$consulta = "UPDATE capacidad SET cant_fun='$cant_fun', cant_no_fun='$cant_no_fun' WHERE id_maquina = '$id_maquina'";

$resultado = mysqli_query($conectar, $consulta);

if ($resultado) {
  include("modificar_capacidad.php");
?>
  <div class="alert-registro">
    <h1>Capacidad Actualizada</h1>
  </div>
  <script>
    setTimeout(function() {
      window.location.href = 'main_admin_capacidad.php';
    }, 2000);
  </script>
<?php
  exit;
} else {
  include("modificar_capacidad.php");
?>
  <div class="alert-registro">
    <h1>Error al actualizar</h1>
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