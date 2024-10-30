<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3DPrinter Explorer 2024</title>
    <link rel="stylesheet" href="../css/styles-login.css">
    <script src="https://kit.fontawesome.com/892bb677d3.js" crossorigin="anonymous"></script>
</head>

<body>

    <section class="sec-registro">
        <div class="div-sec-registro ancho">
            <article class="logo">
                <a href="login.html"><i class="fa-solid fa-binoculars"></i></a>
            </article>

            <article class="art-registro">

                <form action="comparacion.php" class="form-group" method="POST">

                    <p class="art-registro-text">Iniciar Sesion</p>

                    <input type="text" placeholder="Usuario" name="user" required >

                    <input type="password" placeholder="Contraseña" name="pass" required>

                    <div class="form-btns">
                        <button type="submit" class="button-1">Ingresar</button>
                        <button type="button" class="button-3"><a href="../index.html" onclick="return confirm('¿Estás seguro de que desea salir?')">Cancelar</a></button>
                    </div>
                </form>
            </article>
        </div>
        <!-- <figure class="fig-login">
            <img src="../pictures/login-regis.png" alt="">
        </figure> -->
    </section>

</body>

</html>