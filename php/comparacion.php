    <?php
    require "conexion.php";

    $user = $_POST["user"];
    $pass = $_POST["pass"];

    $consulta = "SELECT * FROM registo WHERE usuario = '$user' AND contrasena = '$pass'";

    $query = mysqli_query($conectar, $consulta);

    // if ($query === false) {
    //     die("Error en la consulta SQL: " . mysqli_error($conectar));
    // }

    if (mysqli_num_rows($query) > 0) {
        header("location: main/main.php");
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
