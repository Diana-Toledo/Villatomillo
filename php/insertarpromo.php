<?php
    $nom_promo = $_POST["nombre"];
    $fk_fab = $_POST["fabrica"];   
    $f = $_POST["fecha"];
    $sql_promo = "insert into promociones (nombre,fecha,fk_fabrica,estatus) value ('$nom_promo','$f','$fk_fab',1)"; 
    include 'conexion.php'; 
    mysqli_query($link,$sql_promo);
    echo mysqli_error ($link);
    if (mysqli_error($link)) {
        header("location:promo.php?msj=1"); //ejemplo de "?" que concatena con una variable
         //header, para q la pagina no se quede en blanco, como cuando tenemos muchos inssert
    }
    else{
        header("location:promo.php?msj=0");
    }
 
    
?>