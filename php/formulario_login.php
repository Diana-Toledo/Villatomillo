<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>

<body>
    <section class="content">
        <form method="post" action="controlador.php">

            <label for="" id="label">NOMBRE DE USUARIO</label>
            <input type="text" name="usuario" id="usuario" placeholder="Escribe tu usuario">

            <label for="" id="label">PASSWORD</label>
            <input type="text" name="password" id="password" placeholder="Escribe tu contraseña">

            <input type="hidden" name="oculto" value="2">
            <input type="submit" name="iniciar" id="iniciar" value="ACCEDER">
            <input type="button" onclick="location.href='../index.php'" name="cerrar" id="cerrar" value="CERRAR">
    </form>
    </section>
</body>

</html>