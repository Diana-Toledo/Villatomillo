<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">

</head>

<body>
    <section class="content">

<?php
    $users = $_GET['user'];
    $sql = "SELECT usuarios.nombre, usuarios.apellido, usuarios.usuario, usuarios.email, usuarios.tipo, promociones.nombre
        FROM usuarios_promo INNER JOIN usuarios ON usuarios_promo.fk_usuarios= usuarios.id_login
        INNER JOIN promociones ON usuarios_promo.fk_promociones=promociones.id_promociones
            where  fk_usuarios = '$users'";
    include 'conexion.php';
    $r = mysqli_query($link,$sql);
    $a = mysqli_fetch_array($r);
    
?>
    <form method="post" action="">
    <label for="" id="label">NOMBRE</label>
    <input type="text" name="nombre" value="<?php echo $a[0];?>">
    <label for="" id="label">APELLIDO</label>
    <input type="text" name="apellido" value="<?php echo $a[1];?>">
    <label for="" id="label">USUARIO</label>
    <input type="text" name="usuario" value="<?php echo $a[2];?>">
    <label for="" id="label">EMAIL</label>
    <input type="text" name="email" value="<?php echo $a[3];?>">
    <label for="" id="label">ROL USUARIO</label>
            <select name="usu">
                <option value="a" <?php if ($a[4]=="a"){ echo "selected";}?>> ADMINISTRADOR</option>
                <option value="p" <?php if ($a[4]=="p"){ echo "selected";}?>> RESPONSABLE PROMOCIÓN</option>
                <option value="p" <?php if ($a[4]=="f"){ echo "selected";}?>> FORMADOR</option>
            </select>
    <label for="" id="label">PROMOCIONES:</label>
            <select name="promociones">
                <?php
                $consulta= "select id_promociones, nombre from promociones";
                $re =mysqli_query($link,$consulta);
                while ($arreg = mysqli_fetch_array($re)){
            ?>
                <option value="<?php echo $arreg[0];?>" <?php if ($arreg[0]==$a[5]){ echo " selected" ; }?>>
            <?php echo $arreg[1];?>
                </option>
                <?php } ?>
            </select>
    <input type="submit" name="actualizar" id="actualizar" value="ACTUALIZAR">
    <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiUsu.php'" name="regresar" id="regresar" value="REGRESAR">
</form>

<?php
if (isset($_POST['nombre'])) {
    $nom = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usu = $_POST['usuario'];
    $email = $_POST['email'];
    $promociones = $_POST['promociones'];

    
    $update = "update usuarios set nombre = '$nom', apellido = '$apellido', usuario = '$usu', email = '$email'  
      where id_login = '$users' ";
    mysqli_query($link,$update);

    $up="update usuarios_promo set estatus=0 where fk_usuarios='$users'";
    mysqli_query($link,$up);

    $new="insert into usuarios_promo (fk_usuarios, fk_promociones, estatus) values ('$users','$promociones','1')";
    mysqli_query($link,$new);


    echo mysqli_error($link);
    if (mysqli_error($link)) { ?>
        <script type="text/javascript">
            document.location.href="modiUsu.php?message=1"
        </script>
    <?php   
    }
    
    else{
        ?>
        <script type="text/javascript">
            window.location.href="modiUsu.php?message=0"
        </script>
    <?php   
       
    }
}
?>
 </section>
</body>

</html>