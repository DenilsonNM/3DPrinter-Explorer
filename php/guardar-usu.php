<?php
require "conexion.php";

$nombres = $_POST["nombres"];
$p_apellido = $_POST["p_apellido"];
$s_apellido = $_POST["s_apellido"];
$correo = $_POST["correo"];
$n_celular = $_POST["n_celular"];
$matricula = $_POST["matricula"];
$institucion = $_POST["institucion"];
$carrera = $_POST["carrera"];
$semestre = $_POST["semestre"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO registo (nombres, p_apellido, s_apellido, correo, n_celular, matricula, institucion, carrera, semestre, usuario, contrasena) VALUES ('$nombres', '$p_apellido', '$s_apellido', '$correo', '$n_celular', '$matricula', '$institucion', '$carrera', '$semestre', '$usuario', '$contrasena')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    include("registro.php");
?>
    <div class="alert-registro">
        <h1>Usuario guardado</h1>
    </div>
    <script>
        setTimeout(function() {
            // window.location.href = '../index.html';
            window.location.href = 'login.php';
        }, 3000);
    </script>

<?php
    exit;
} else {
    include("registro.php");
?>
    <div class="alert-registro">
        <h1>Error al guardar usuario</h1>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = '/registro.php';
        }, 5000);
    </script>

<?php
    exit;
}
