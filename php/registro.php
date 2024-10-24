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

    <section class="sec-registro">
        <div class="div-sec-registro ancho">
            <article class="logo">
                <a href="registro.html"><i class="fa-solid fa-binoculars"></i></a>
            </article>

            <article class="art-registro">

                <form action="datos-regist.php" class="form-group" method="POST">

                    <p class="art-registro-text">Datos Personales</p>

                    <input type="text" placeholder="Nombre(s)" name="nombres">
                    <input type="text" placeholder="Primer apellido" name="pApellido">
                    <input type="text" placeholder="Segundo apellido" name="sApellido">
                    <input type="email" placeholder="Correo electronico" name="correo">
                    <input type="number" placeholder="Numero de telefono/Celular" name="nCelular">

                    <p class="art-registro-text"> Datos Escolares</p>

                    <input type="text" placeholder="Matricula" name="matricula">
                    <select name="institucion">
                        <option value="">Selecciona una institucion</option>
                        <option value="Preuba">Prueba</option>
                    </select>
                    <select name="carrera">
                        <option value="">Carrera</option>
                        <option value="Preuba">Prueba</option>
                    </select>
                    <select name="semestre">
                        <option value="">Selecciona el semestre</option>
                        <option value="Preuba">Prueba</option>
                    </select>

                    <input type="Usuario" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <input type="password" placeholder="Confirmar Contraseña" name="contrasenaConfirm">

                    <div class="form-checkbox">
                        <input type="checkbox">
                        <p class="check-text">Acepto todos los terminos y condicones</p>
                    </div>

                    <div class="form-btns">
                        <button type="submit" value="login" class="button-1">Registrase</button>
                        <button type="reset" class="button-3">Cancelar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
</body>

</html>