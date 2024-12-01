<?php
require "../../conexion.php";

$nom_edi = $_POST["nom_edi"];
$maquina = $_POST["maquina"];
$tecnologia = $_POST["tecnologia"];
$cant_fun = $_POST["cant_fun"];
$cant_no_fun = $_POST["cant_no_fun"];

$insertar = "INSERT INTO capacidad (nom_edi, maquina, tecnologia, cant_fun, cant_no_fun) VALUES ('$nom_edi', '$maquina', '$tecnologia', '$cant_fun', '$cant_no_fun')";

$query = mysqli_query($conectar, $insertar);

if ($query) {
    include("main_admin_capacidad.php");
?>
    <div class="alert-registro">
        <h1>Guardado</h1>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = 'main_admin_capacidad.php';
        }, 3000);
    </script>

<?php
    exit;
} else {
    include("main_admin_capacidad.php");
?>
    <div class="alert-registro">
        <h1>Error al guardar</h1>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = 'main_admin_capacidad.php';
        }, 5000);
    </script>

<?php
    exit;
}
