<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3DPrinter Explorer 2024</title>
    <link rel="stylesheet" href="../css/styles-registro.css">
    <script src="https://kit.fontawesome.com/c35572497d.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class=".div-alert-registro"></div>

    <section class="sec-registro">
        <div class="div-sec-registro ancho">
            <article class="logo">
                <a href="registro.html"><i class="fa-solid fa-binoculars"></i></a>
            </article>

            <article class="art-registro">

                <form action="guardar-usu.php" class="form-group" method="POST">

                    <p class="art-registro-text">Datos Personales</p>

                    <input type="text" placeholder="Nombre(s)" name="nombres" required>
                    <input type="text" placeholder="Primer apellido" name="p_apellido" required>
                    <input type="text" placeholder="Segundo apellido" name="s_apellido" required>
                    <input type="email" placeholder="Correo electronico" name="correo" required>
                    <input type="number" placeholder="Numero de telefono/Celular" name="n_celular" required>

                    <p class="art-registro-text">Datos Escolares</p>

                    <input type="text" placeholder="Matricula" name="matricula" required>
                    <select name="institucion" required>
                        <option value="">Selecciona una institucion</option>
                        <option value="Instituto Tecnológico de Mérida">Instituto Tecnológico de Mérida</option>
                        <option value="Universidad Modelo">Universidad Modelo</option>
                        <option value="Universidad Anáhuac Mayab">Universidad Anáhuac Mayab</option>
                    </select>
                    <select name="carrera" required>
                        <option value="">Carrera</option>
                        <option value="Ingenieria en Sistemas Computacionales">Ingenieria en Sistemas Computacionales</option>
                    </select>
                    <select name="semestre" required>
                        <option value="">Selecciona el semestre</option>
                        <option value="1">1</option>
                        <option value="1">11</option>
                    </select>

                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <input type="text" placeholder="Confirmar Contraseña" required>

                    <div class="form-checkbox">
                        <input type="checkbox" required>
                        <p class="check-text">Acepto todos los terminos y condicones</p>
                    </div>

                    <div class="form-btns">
                        <button type="submit" class="button-1" onclick="return confirm('¿Estás seguro de que desea continuar')">Registrase</button>
                        <button type="button" class="button-3"><a href="../index.html" onclick="return confirm('¿Estás seguro de que desea salir?')">Cancelar</a></button>
                    </div>
                </form>
            </article>
        </div>
    </section>
</body>

</html>