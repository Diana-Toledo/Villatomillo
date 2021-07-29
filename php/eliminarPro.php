<?php 
include 'conexion.php';

$id_pro = $_GET['id_pro'];/*tengo el id de la especie q quiero eliminar*/
$delete = "delete from promociones where id_promociones = $id_pro";

mysqli_query($link,$delete);/*ejecuto la consulta*/
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
window.location.href = "modiPromo.php?message=0"
</script>
<?php   
       
    }?>