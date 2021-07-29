<!DOCTYPE html>
<html>
<head>
	<title>promociones</title>

</head>
<body>

  <form method="POST" action="">
   
    
    <input type="submit" name="">
    
    <select name="os">
      <option value="1">consulta fabrica</option>
      <option value="2">consultar promociones</option>
      <option value="3">consultar formadores</option>
      <option value="4">consultar coders</option>
  
    </select>
  </form>

  <?php //consulta fabrica
   include 'conexion.php';

    if (isset($_POST['os']) AND $_POST['os']==1){ 
        $prom = $_POST['os'];
        $sql = "SELECT fabrica.nombre, fabrica.estatus
        FROM fabrica
        WHERE fabrica.estatus = 1 "; 
        
        $r = mysqli_query($link,$sql);
        echo mysqli_error($link);
  ?>
        
        <table border = 2>
        <th>FABRICA</th>
        <th>ESTATUS</th>

        <?php //Esto es para mostrar fabricas y transformar los numeros 1 y 0 en palabras: activos o inactivos
        while ($arr = mysqli_fetch_array($r)){ ?>

             <tr>
                <td><?php echo $arr[0]; ?></td>
                <td value= 1><?php if ($arr[1]==1){
                   echo "ACTIVO";
                  }
                 /* else{
                    echo "INACTIVO";

                  }*/
                ?>
                 </td>
              </tr>
 <?php   
        }
      }
      
        elseif(isset($_POST['os']) AND $_POST['os']==2){ //para consultar promociones


          $prom = $_POST['os'];
          $sql = "SELECT promociones.nombre,promociones.fecha,fabrica.nombre,promociones.estatus
        FROM promociones INNER JOIN fabrica on fabrica.id_fabrica = promociones.fk_fabrica"; 


        $r = mysqli_query($link,$sql);
        echo mysqli_error($link);

        ?>
        
        <table border = 2>
        <th>NOMBRE</th>
        <th>FECHA</th>
        <th>FABRICA</th>
        <th>ESTATUS</th>

        <?php //Esto es para mostrar fabricas y transformar los numeros 1 y 0 en palabras: activos o inactivos
        while ($arr = mysqli_fetch_array($r)){ ?>

             <tr>
                <td><?php echo $arr[0]; ?></td>
                <td><?php echo $arr[1]; ?></td>
                <td><?php echo $arr[2]; ?></td>
                <td value= 2 ><?php if ($arr[3]==1){
                   echo "ACTIVO";
                  }
                  else{
                    echo "INACTIVO";

                  }
                ?>
                 </td>
              </tr>




        
            

              <?php   
        }
      }
      
        elseif(isset($_POST['os']) AND $_POST['os']==3){ //para formadores 


          $prom = $_POST['os'];
          $sql = "SELECT usuarios.nombre, usuarios.tipo, usuarios.estatus
          FROM usuarios 
          WHERE usuarios.tipo = 'F' ";

        $r = mysqli_query($link,$sql);
        echo mysqli_error($link);

        ?>
        
        <table border = 2>
        <th>NOMBRE</th>
        <th>TIPO</th>
        <th>ESTATUS</th>

        <?php //Esto es para mostrar fabricas y transformar los numeros 1 y 0 en palabras: activos o inactivos
          while ($arr = mysqli_fetch_array($r)){ ?>

             <tr>
                <td><?php echo $arr[0]; ?></td>

                <td value= 3><?php if ($arr[1]=='F'){
                   echo "FORMADOR";
                  }
                  ?>
                  </td>


                <td value= 3><?php if ($arr[2]==1){
                   echo "ACTIVO";
                  }
                  else{
                    echo "INACTIVO";

                  }
                ?>
                 </td>
              </tr>




        <?php
            }
         }

         elseif(isset($_POST['os']) AND $_POST['os']==4){  //para coders

          $prom = $_POST['os'];
          $sql = "SELECT coders.nombre, coders.apellido,coders.dni, promociones.nombre, coders.estatus
        FROM coders INNER JOIN promociones on promociones.id_promociones = coders.fk_promociones
        WHERE promociones.estatus = 1 ";
         


        $r = mysqli_query($link,$sql);
        echo mysqli_error($link);


        ?>
         <table border = 2>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>D. Identitad</th>
        <th>PROMOCION</th>
        <th>ESTATUS</th>

        <?php //Esto es para mostrar fabricas y transformar los numeros 1 y 0 en palabras: activos o inactivos
          while ($arr = mysqli_fetch_array($r)){ ?>

             <tr>
                <td><?php echo $arr[0]; ?></td>
                <td><?php echo $arr[1]; ?></td>
                <td><?php echo $arr[2]; ?></td>
                <td><?php echo $arr[3]; ?></td>
                <td value= 4><?php if ($arr[4]==1){
                   echo "ACTIVO";
                  }
                  else{
                    echo "INACTIVO";

                  }
                ?>
                 </td>
              </tr>




        <?php
            }
         }
         ?>


 </body>
 </html>
     
     