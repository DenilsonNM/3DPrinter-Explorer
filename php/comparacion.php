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
        include("index.php");
        ?>
        <div class="alert-registro">
        <h1>Acceso Concedido</h1>
    </div>
    <script>
        setTimeout(function() {
            // window.location.href = '../index.html';
            window.location.href = 'index.php';
        }, 3000);
    </script>
    <?php 
    } else {
        include("login.php");
        ?>
        <div class="alert-registro">
        <h1>Usuario o Contraseña Incorrecta</h1>
    </div>
    <script>
        setTimeout(function() {
            window.location.href = '/login.php';
        }, 5000);
    </script>
        <?php 
        exit;
    }


