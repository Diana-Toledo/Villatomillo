<?php 
include 'conexion.php';
$id_cod = $_GET['id_cod'];
$delete = "delete from coders where id_coders=$id_cod";
mysqli_query($link,$delete);
echo mysqli_error($link);
  if (mysqli_error($link)) { ?>
<script type="text/javascript">
document.location.href = "modiCo.php?message=1"
</script>
<?php   
    }
    
    else{
        ?>
<script type="text/javascript">
window.location.href = "modiCo.php?message=0"
</script>
<?php   
       
    }?>