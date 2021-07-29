<?php 
include "conexion.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>coders</title>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>

<body>
    <section class="content">
        <form action="insert_coders.php" method="post">
            <label for="" id="label">NOMBRE:</label>
            <input type="text" name="nombre" id="nombre" onblur="validarCodtxt('nombre','snombre')">
            <span id="snombre"></span>
            <label for="" id="label">APELLIDO:</label>
            <input type="text" name="apellido" id="apellido" onblur="validarCodtxt('apellido','sapellido')">
            <span id="sapellido"></span>
            <label for="" id="label">DNI:</label>
            <input type="text" name="dni" id="dni" onblur="validarDni('dni','snumero')">
            <span id="snumero"></span>
            <label for="" id="label">NACIONALIDAD:</label>
            <select name="nacionalidad">
                <?php
                
                $consulta= "select id_pais, nacionalidad from pais";
                $r =mysqli_query($link,$consulta);
                while ($arr = mysqli_fetch_array($r)){?>
                <option value="<?php echo $arr[0];?>">
                    <?php echo $arr[1];?>
                </option>
                <?php } ?>
            </select>
            <label for="" id="label">FECHA DE NACIMIENTO:</label>
            <input type="date" name="fnacimiento" id="cumple">
            <span id="scumple"></span>
            <label for="" id="label">PROMOCIONES:</label>
            <select name="promociones">
                <?php
                $consulta= "select id_promociones, nombre from promociones";
                $r =mysqli_query($link,$consulta);
                while ($arr = mysqli_fetch_array($r)){
            ?>
                <option value="<?php echo $arr[0];?>">
                    <?php echo $arr[1];?>
                </option>
                <?php } ?>
            </select>

            <div class="msj">
                <?php 
        if (isset($_GET['alerta'])) {  //el usuario da la variable entre los corchetes
          if ($_GET['alerta'] == 1) {  // el usuario le da el valor a la variable, si es igual a 1 (en este caso), da el echo
            echo "ERROR no se ha podido agregar";
          }
          else{
            echo "Coder agregado con éxito";
          }
        }
     ?>
            </div>
            <input type="submit" name="iniciar" id="iniciar" value="AGREGAR">
            <input type="button" onclick="location.href='../php/menu_adm.php'" name="regresar" id="regresar" value="REGRESAR">
        </form>
    </section>
    <script type="text/javascript" src="../js/coders.js"></script>
</body>