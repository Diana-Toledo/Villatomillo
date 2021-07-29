<!DOCTYPE html>
<html>
<head>
	<title>promociones</title>
  <link rel="stylesheet" type="text/css" href="../css/form.css">
  <script type="text/javascript" src="js/promo.js"></script>
  <style>
    .error{
      background-color: red;
      color: black;
    }  
  
  </style>

</head>

<body>

  <section class="content">
	
    <form action="insertarpromo.php" method="post">
		
			<label for="" id="label">NOMBRE DE PROMOCIÓN:</label>
			<input type="text" name="nombre" id="promoNom" onblur="validarPromo()"/>
      <span id="nameInfop"></span>
           
			<label for="" id="label">AÑO DE PROMOCIÓN:</label>
			<input type="date" name="fecha" id="fpromo" onblur="validarFecha()"/>
      <span id="nameInfof"></span>
           
        
      <label for="" id="label">FÁBRICA:</label>
		<select name= "fabrica">
            <?php
                include "conexion.php";
                $consulta= "select id_fabrica, nombre from fabrica";
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
        if (isset($_GET['msj'])) {  //el usuario da la variable entre los corchetes
          if ($_GET['msj'] == 1) {  // el usuario le da el valor a la variable, si es igual a 1 (en este caso), da el echo
            echo "ERROR no se ha podido agregar";
          }
          else{
            echo "Promoción agregada con éxito";
          }
        }
     ?>
  </div>
		<input type="submit" name="iniciar" id="iniciar" value="AGREGAR">
    <input type="button" onclick="location.href='../php/menu_adm.php'" name="regresar" id="regresar" value="REGRESAR">
	</form>
</section>
<script type="text/javascript" src="../js/promo.js"></script>
	


</body>
</html>