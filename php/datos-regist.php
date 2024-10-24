<?php 
require "conexion.php"; 

$nombre = $_POST["nombres"];
$pApellido = $_POST["pApellido"];
$sApellido = $_POST["sApellido"];
$correo = $_POST["correo"];
$nCelular = $_POST["nCelular"];
$matricula = $_POST["matricula"];
$institucion = $_POST["institucion"];
$carrera = $_POST["carrera"];
$semestre = $_POST["semestre"];
$usuario = $_POST["usuario"];
$contrasena = $_POST["contrasena"];
$contrasenaConfirm = $_POST["contrasenaConfirm"];

$insertar = "INSERT INTO registo (nombres, pApellido, sApellido, correo, nCelular, matricula, institucion, carrera, semestre, usuario, contrasena, contrasenaConfirm) VALUES ('$nombre', '$pApellido', '$sApellido', '$correo', '$nCelular', '$matricula'. '$institucion'. '$carrera'. '$semestre'. '$usuario'. '$contrasena'. '$contrasenaConfirm')"; 

$query = mysqli_query ($conectar, $insertar);

if ($query) {
    echo'
    <script>
        alert("Se guardo correctamente");
        location.href ="registro.php";
    </script>
    ';
}else{
    echo '
    <script>
        alert("Fallo en la base de datos");
        location.href ="registro.php";
    </script>
    ';
}