<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/tables.css"> 
</head>
<body>
  <section class="content1">
      <table id="example" data-order='[[0,"asc"],[1, "asc"],[2, "asc"],[3,"asc"],[4, "asc"]]' data-page-length='25' class="table table-light table-hover table-dark-bordered">

    <thead class="thead-dark">
        <tr>
            <th scope="col">NOMBRE PROMOCIÓN</th>
            <th scope="col">FECHA PROMO</th>
            <th scope="col">FABRICA</th>
            <th scope="col">ESTATUS</th>
            <th scope="col">EDITAR</th>
        </tr>
    </thead>
<?php 

    $sql = "SELECT promociones.nombre, promociones.fecha, fabrica.nombre, promociones.estatus, promociones.id_promociones
        FROM promociones INNER JOIN fabrica ON promociones.fk_fabrica = fabrica.id_fabrica";
        $r = mysqli_query($link,$sql);?>
        
        <?php
         echo "hola";
        while ($arr = mysqli_fetch_array($r)){ ?>

             <tr>
                <td><?php echo $arr[0]; ?></td>
                <td><?php echo $arr[1]; ?></td>
                <td><?php echo $arr[2]; ?></td>
                <td><?php if($arr[3]==1){
                  echo "ACTIVO";
                }
                else{
                  echo "INACTIVO";
                } ?></td>
                <td>
                  <a href="modificarPromo.php?prom=<?php echo $arr[4];?>">MODIFICAR -</a>
                  <a href="eliminarPro.php?id_pro=<?php echo $arr[4];?>">ELIMINAR</a>
                </td>
             </tr>
        
            <?php 
            
        }
        ?>
      </table>
      <input type="button" onclick="location.href='http://localhost/villatomillo/'" name="regresar" id="regresar" value="REGRESAR">

      </section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--datatables-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="../js/datatable.js"></script> 
<!--datatables-->

</body>

</html>