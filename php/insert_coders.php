<?php
    $nom_code = $_POST["nombre"];
    $fk_prom = $_POST["promociones"];   
    $fechanac = $_POST["fnacimiento"]; 
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $nacio = $_POST["nacionalidad"];

    

    $sql_coders = "insert into coders (nombre,apellido,dni,fecha,fk_promociones,fk_pais,estatus)
     values ('$nom_code','$apellido','$dni','$fechanac','$fk_prom','$nacio',1)"; 
    include 'conexion.php'; 
    mysqli_query($link,$sql_coders);
    echo mysqli_error($link);
    
    if (mysqli_error($link)) {
        header("location:coders.php?alerta=1"); 
    }
    else{
        header("location:coders.php?alerta=0");
    }
 
?>

