<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3DPrinter Explorer 2024</title>
    <link rel="stylesheet" href="../css/styles-registro.css">
    <script src="https://kit.fontawesome.com/c35572497d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="../js/app.js"></script>
</head>

<body>

    <div class="div-alert-registro"></div>

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
                    <select name="institucion" required id="universidad" onchange="cargarCarreras(this.value)">
                        <!-- <option value="">Selecciona Universidad</option> -->
                    </select>
                    <select name="carrera" required id="carrera">
                        <option value="">Seleccione una carrera</option>
                    </select>

                    <!-- <select name="semestre" required>
                        <option value="">Selecciona el semestre</option>
                        <option value="1">1</option>
                        <option value="11">11</option>
                    </select> -->

                    <input type="number" placeholder="Semestre" name="semestre" required>

                    <input type="text" placeholder="Usuario" name="usuario" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <input type="text" placeholder="Confirmar Contraseña" required>

                    <div class="form-checkbox">
                        <input type="checkbox" required>
                        <p class="check-text">Acepto todos los términos y condiciones</p>
                    </div>

                    <div class="form-btns">
                        <button type="submit" class="button-1" onclick="return confirm('¿Estás seguro de que desea continuar')">Registrarse</button>

                        <button type="button" class="button-3"><a href="../index.html" onclick="return confirm('¿Estás seguro de que desea salir?')">Cancelar</a></button>
                    </div>
                </form>
            </article>
        </div>
    </section>
</body>


</html>