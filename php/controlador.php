<?php  
session_start();
include 'conexion.php';
include 'funciones.php';


$oculto = $_POST['oculto'];
switch ($oculto) {
	case 1:
		registrarUsu($link);
		break;
	case 2:
		login($link);
		break;
	
}
?>