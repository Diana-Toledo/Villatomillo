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
        <form action="insertar_fabri.php" method="post">
            <label for="" id="label">NOMBRE DE FÁBRICA:</label>
            <input id="n_fabri" type="text" name="nombre" onblur="validarNombre()" />
            <span id="nameInfo"></span>
            <label for="" id="label">CIUDAD:</label>
            <select name="ciudad">
                <?php
                include "conexion.php";
                $consulta= "select id_ciudad, nombre from ciudad";
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
        if (isset($_GET['message'])) {  //el usuario da la variable entre los corchetes
          if ($_GET['message'] == 1) {  // el usuario le da el valor a la variable, si es igual a 1 (en este caso), da el echo
            echo "ERROR no se ha agregado";
          }
          else{
            echo "Fabrica agregada con éxito";
          }
        }
     ?>
            </div>
            <input type="submit" name="iniciar" id="iniciar" value="AGREGAR">
            <input type="button" onclick="location.href='../php/menu_adm.php'" name="regresar" id="regresar" value="REGRESAR">
        </form>
    </section>
    <script type="text/javascript" src="../js/fabrica.js"></script>
</body>

</html>