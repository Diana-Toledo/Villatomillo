<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">

</head>

<body>
    <section class="content">

<?php
    $fabrica = $_GET['fabri'];
    $sql = "select nombre, fk_ciudad,estatus
      from fabrica
      where ID_FABRICA='$fabrica'";
    include 'conexion.php';
    $r = mysqli_query($link,$sql);
    $a = mysqli_fetch_array($r);
    
?>
<form method="post" action="">
    <label for="" id="label">NOMBRE</label>
    <input type="text" name="nombre" value="<?php echo $a[0];?>">
    <label for="" id="label">CIUDAD</label>
    <select name="ciudad">
        <?php
                $consulta= "select id_ciudad, nombre from ciudad";
                $r =mysqli_query($link,$consulta);
                while ($arr = mysqli_fetch_array($r)){?>
        <option value="<?php echo $arr[0];?>" <?php if ($arr[0]==$a[1]){ echo " selected" ; }?>>
            <?php echo $arr[1];?>
        </option>
        <?php } ?>
    </select>
    <label for="" id="label">ESTATUS</label>
    <select name="estatus">
        <option value="1" <?php if ($a[2]==1){ echo "selected";}?>> ACTIVO</option>
        <option value="0" <?php if ($a[2]==0){ echo "selected";}?>> INACTIVO</option>
    </select>
    <input type="submit" name="actualizar" id="actualizar" value="ACTUALIZAR">
    <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiFa.php'" name="regresar" id="regresar" value="REGRESAR">
</form>
<?php
if (isset($_POST['nombre'])) {
    $nom = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $esta = $_POST['estatus'];
    
    $update = "update fabrica set nombre = '$nom', fk_ciudad = '$ciudad', estatus='$esta'
      where id_fabrica = '$fabrica' ";
    
    mysqli_query($link,$update);
    echo mysqli_error($link);
    if (mysqli_error($link)) { ?>
<script type="text/javascript">
document.location.href = "modiFa.php?message=1"
</script>
<?php   
    }
    
    else{
        ?>
<script type="text/javascript">
window.location.href = "modiFa.php?message=0"
</script>
<?php   
       
    }
}
?>
 </section>
</body>

</html>