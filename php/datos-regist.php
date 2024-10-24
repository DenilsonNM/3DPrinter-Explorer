<?php 
require "conexion.php"; 

$nombre = $_POST[""];
$pApellido = $_POST[""];
$sApellido = $_POST[""];
$correo = $_POST[""];
$nCelular = $_POST[""];
$matricula = $_POST[""];
$institucion = $_POST[""];
$carrera = $_POST[""];
$semestre = $_POST[""];
$usuario = $_POST[""];
$contrasena = $_POST[""];
$contrasenaConfirm = $_POST[""];

$agregar = "INSERT INTO residencia (nombres, p-apellido, s-apellido, correo, n-celular, matricula, institucion, carrera, semestre, usuario, contrasena, contrasena-confirm) VALUES ('$nombre', '$pApellido', '$sApellido', '$correo', '$nCelular', '$matricula'. '$institucion'. '$carrera'. '$semestre'. '$usuario'. '$contrasena'. '$contrasenaConfirm')"; 

$query = mysqli_query ($conectar, $agregar);

if($query){
    echo '
    <script>
    alert ("SE GUARDO CORRECTAMENTE");
        location.href = "registro.php";
        </script>
    ';
  }else{
        echo'
        <script>
        alert ("NO SE GUARDO CORRECTAMENTE");
            location.href = "registro.php";
            </script>
  
        ';
    }