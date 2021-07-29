<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">

</head>

<body>
    <section class="content">

<?php
    $coders = $_GET['cod'];
    $sql = "select nombre, apellido, dni, fecha, fk_pais, fk_promociones, estatus
            from coders
            where id_coders = '$coders' ";
    include 'conexion.php';
    $r = mysqli_query($link,$sql);
    $a = mysqli_fetch_array($r);
    
?>
    <form method="post" action="">
    <label for="" id="label">NOMBRE</label>
    <input type="text" name="nombre" value="<?php echo $a[0];?>">
    <label for="" id="label">APELLIDO</label>
    <input type="text" name="apellido" value="<?php echo $a[1];?>">
    <label for="" id="label">DNI</label>
    <input type="text" name="dni" value="<?php echo $a[2];?>">
    <label for="" id="label">FECHA DE NACIMIENTO</label>
    <input type="date" name="fecha" value="<?php echo $a[3];?>">
    <label for="" id="label">NACIONALIDAD:</label>
            <select name="nacionalidad">
                <?php
                
                $consulta= "select id_pais, nacionalidad from pais";
                $r =mysqli_query($link,$consulta);
                while ($arr = mysqli_fetch_array($r)){?>
                <option value="<?php echo $arr[0];?>" <?php if ($arr[0]==$a[4]){ echo " selected" ; }?>>
            <?php echo $arr[1];?>
                </option>
                <?php } ?>
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

    <label for="" id="label">ESTATUS</label>
    <select name="estatus">
        <option value="1" <?php if ($a[6]==1){ echo "selected";}?>> ACTIVO</option>
        <option value="0" <?php if ($a[6]==0){ echo "selected";}?>> INACTIVO</option>
    </select>
    <input type="submit" name="actualizar" id="actualizar" value="ACTUALIZAR">
    <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiCo.php'" name="regresar" id="regresar" value="REGRESAR">
</form>

<?php
if (isset($_POST['nombre'])) {
    $nom = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $nacimiento = $_POST['fecha'];
    $nacionalidad = $_POST['nacionalidad'];
    $promociones = $_POST['promociones'];
    $esta = $_POST['estatus'];
    
    $update = "update coders set nombre = '$nom', apellido = '$apellido', dni = '$dni', fecha = '$nacimiento', fk_pais =  '$nacionalidad',  fk_promociones = '$promociones', estatus = '$esta'
      where id_coders = '$coders' ";
    
    mysqli_query($link,$update);
    echo mysqli_error($link);
    if (mysqli_error($link)) { ?>
        <script type="text/javascript">
            document.location.href="modiCo.php?message=1"
        </script>
    <?php   
    }
    
    else{
        ?>
        <script type="text/javascript">
            window.location.href="modiCo.php?message=0"
        </script>
    <?php   
       
    }
}
?>
 </section>
</body>

</html>