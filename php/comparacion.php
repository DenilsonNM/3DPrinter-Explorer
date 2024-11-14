<?php
require "conexion.php";

$user = $_POST["user"];
$pass = $_POST["pass"];

session_start();

$query = mysqli_query($conectar, "SELECT * FROM registro WHERE usuario = '$user' AND contrasena = '$pass'");

$nr = mysqli_num_rows($query);


// if ($query === false) {
//     die("Error en la consulta SQL: " . mysqli_error($conectar));
// }

if ($nr == 1) {

    $row = mysqli_fetch_assoc($query);

    $_SESSION['id_registro'] = $row['id_registro'];
    $_SESSION['usuario'] = $row['usuario'];

    switch ($row['usuario']) {
        case 'Denilson':
            header("location: main/admin/main_admin.php");
            break;
        default:
            header("location: main/main.php");
            break;
    }
} else {
    include("login.php");
?>
    <div class="alert-registro">
        <h1>Usuario o Contraseña Incorrecta</h1>
    </div>
    <!-- <script>
            setTimeout(function() {
                window.location.href = 'login.php';
            }, 5000);
        </script> -->
<?php
    exit;
}
mysqli_free_result($query);
mysqli_close($conectar);
