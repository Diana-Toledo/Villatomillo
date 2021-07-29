<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    <style>
        .error{
      background-color: red;
      color: black;
    }  
  
  </style>
    <script type="text/javascript" src="js/fabrica.js"></script>
</head>

<body>
    <section class="content">
        <?php
    $promocion = $_GET['prom'];
    $sql = "select nombre, fecha, fk_fabrica,estatus
            from promociones
            where id_promociones = '$promocion' ";
    include 'conexion.php';
    $r = mysqli_query($link,$sql);
    $a = mysqli_fetch_array($r);
    
?>
        <form method="post" action="">
            <label for="" id="label">NOMBRE PROMOCIÓN</label>
            <input type="text" name="nombre" value="<?php echo $a[0];?>">
            <label for="" id="label">FECHA PROMO</label>
            <input type="text" name="fecha" value="<?php echo $a[1];?>">
            <label for="" id="label">FABRICA</label>
            <select name="fabrica">
                <?php
                include "conexion.php";
                $consulta= "select id_fabrica, nombre from fabrica";
                $r =mysqli_query($link,$consulta);
                while ($arr = mysqli_fetch_array($r)){?>
                <option value="<?php echo $arr[0];?>" <?php if ($arr[0]==$a[2]){ echo " selected" ; }?>>
                    <?php echo $arr[1];?>
                </option>
                <?php } ?>
            </select>
            <label for="" id="label">ESTATUS</label>
            <select name="estatus">
                <option value="1" <?php if ($a[2]==1){ echo "selected" ;}?>> ACTIVO</option>
                <option value="0" <?php if ($a[2]==0){ echo "selected" ;}?>> INACTIVO</option>
            </select>
            <input type="submit" name="actualizar" id="actualizar" value="ACTUALIZAR">
            <input type="button" onclick="location.href='http://localhost/villatomillo/php/modiPromo.php'" name="regresar" id="regresar" value="REGRESAR">
        </form>
        <?php
if (isset($_POST['nombre'])) {
    $nom = $_POST['nombre'];
    $fech = $_POST['fecha'];
    $fabrica = $_POST['fabrica'];
    $esta = $_POST['estatus'];
    
    $update = "update promociones set nombre = '$nom', fecha= '$fech', fk_fabrica = '$fabrica', estatus='$esta'
      where id_promociones = '$promocion' ";
    
    mysqli_query($link,$update);
    echo mysqli_error($link);
    if (mysqli_error($link)) { ?>
        <script type="text/javascript">
        document.location.href = "modiPromo.php?message=1"
        </script>
        <?php   
    }
    
    else{
        ?>
        <script type="text/javascript">
        document.location.href = "modiPromo.php?message=0"
        </script>
        <?php   
       
    }
     
      //el signo "?" entre php y una variable, concatena una ruta con una variable (todo junto sin espacios)
}
?>
    </section>
</body>

</html>