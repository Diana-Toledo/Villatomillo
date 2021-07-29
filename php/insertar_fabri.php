<?php
    $nom = $_POST["nombre"];
    $ciu = $_POST["ciudad"];
    $sql = "insert into fabrica (nombre,fk_ciudad,estatus) value ('$nom','$ciu',1)";
    include 'conexion.php';
    mysqli_query($link,$sql);
    if (mysqli_error($link)) {
        header("location:fabrica.php?message=1"); //ejemplo de "?" que concatena con una variable
         //header, para q la pagina no se quede en blanco, como cuando tenemos muchos inssert
    }
    else{
        header("location:fabrica.php?message=0");
    }   
     
?>

