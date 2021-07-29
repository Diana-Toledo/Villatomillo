<?php 
include 'conexion.php';

$id_fab = $_GET['id_fab'];
$delete = "delete from fabrica where id_fabrica = $id_fab";

mysqli_query($link,$delete);
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
       
    }?>