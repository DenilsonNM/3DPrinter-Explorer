<?php 
require "conexion.php";

$seleccion= "SELECT id_universidad, universidad FROM universidades ";
$query = mysqli_query($conectar, $seleccion);

$universidades = [];
if ($query && $query->num_rows > 0) {
    while ($row = $query->fetch_assoc()) {
        $universidades[] = $row;
    }
}

echo json_encode($universidades);