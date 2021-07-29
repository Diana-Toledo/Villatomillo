<?php
    session_start();
include 'conexion.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css"> 
</head>

<body>
      <section class="content">
        <form method="post" action="controlador.php">
            <label for="" id="label">NOMBRE</label>
            <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre">
            <label for="" id="label">APELLIDO</label>
            <input type="text" name="apellido" id="apellido" placeholder="Escribe tu apellido">
            <label for="" id="label">NOMBRE USUARIO</label>
            <input type="text" name="usuario" id="usuario" placeholder="Escribe usuario">
            <label for="" id="label">EMAIL</label>
            <input type="text" name="email" id="email" placeholder="Escribe tu email">
            <label for="" id="label">PASSWORD</label>
            <input type="text" name="password" id="password" placeholder="Escribe tu contraseña">
            <label for="" id="label">TIPO DE ROL</label>
            <select name="tipo">
                <option value="f">FORMADOR/A</option>
            </select>
            <label for="" id="label">PROMOCIONES:</label>
            <select name="promociones">
                <?php
                include 'conexion.php';
                $consulta= "SELECT id_promociones, nombre from promociones INNER JOIN usuarios_promo ON usuarios_promo.fk_promociones=promociones.id_promociones WHERE usuarios_promo.estatus=1 AND usuarios_promo.fk_usuarios='$_SESSION[id]'";
                $r =mysqli_query($link,$consulta);
                while ($arr = mysqli_fetch_array($r)){
            ?>
                <option value="<?php echo $arr[0];?>">
                    <?php echo $arr[1];?>
                </option>
                <?php } ?>
            </select>
            <img src="captcha.php" width="100" height="30" class="img-polaroid"/>
            <input type="text" name="tmptxt" placeholder="Ingresa el Código" />
            <input type="hidden" name="oculto" value="1">

            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error']== 'Email') {
                    echo "Email ya Existe";   
                }
                elseif ($_GET['error']== 'Usuario') {
                    echo "Usuario ya Existe";
                }
                elseif ($_GET['error']== 'Codigo') {
                    echo "Código incorrecto";
                }
                elseif ($_GET['error']== 'bien'){
                    echo "Agregado con éxito";
                }
            }
            ?>


            <input type="submit" name="iniciar" id="iniciar" value="REGISTRARSE">
            <input type="button" onclick="location.href='../index.php'" name="cerrar" id="cerrar" value="CERRAR">
        </form>
    </section>
</body>

</html>