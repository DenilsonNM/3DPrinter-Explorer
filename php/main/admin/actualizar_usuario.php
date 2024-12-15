<?php
require "../../conexion.php";


$id_registro = $_GET['id_registro'];

$matricula = $_POST['matricula'];
$nombres = $_POST['nombres'];
$p_apellido = $_POST['p_apellido'];
$s_apellido = $_POST['s_apellido'];
// $institucion = $_POST['institucion'];
// $carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$correo = $_POST['correo'];
$n_celular = $_POST['n_celular'];
$usuario = $_POST['usuario'];
// $contrasena = $_POST['contrasena'];

$consulta = "UPDATE registro SET nombres='$nombres', p_apellido='$p_apellido', s_apellido='$s_apellido', semestre='$semestre', correo='$correo', n_celular='$n_celular', usuario='$usuario' WHERE id_registro = '$id_registro'";

$resultado = mysqli_query($conectar, $consulta);

if ($resultado) {
  include("modificar_usuario.php");
?>
  <div class="alert-registro">
    <h1>Usuario Actualizado</h1>
  </div>
  <script>
    setTimeout(function() {
      window.location.href = 'main_admin_usuarios.php';
    }, 2000);
  </script>
<?php
  exit;
} else {
  include("modificar_usuario.php");
?>
  <div class="alert-registro">
    <h1>Error al actualizar</h1>
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