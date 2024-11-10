<?php 
require "conexion.php";

$universidad_id = $_GET['id_universidad'];

$seleccion = "SELECT id_carrera, carrera FROM carreras WHERE id_universidad = $universidad_id";
$query = mysqli_query($conectar, $seleccion);

$carreras = [];
if ($query && $query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $carreras[] = $row;
    }
}

echo json_encode($carreras);


?>