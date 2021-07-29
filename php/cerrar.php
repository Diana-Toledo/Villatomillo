<?php
	session_start();//siempre el session_start para eliminar, modificar,etc
	session_destroy();//destruye la variabkes de sesion creadas
	header('location:../index.php');//luego deberia hacer una redireccion
?>