<?php 
function registrarUsu($link){
	$consulta = "select *  from usuarios where email = '$_POST[email]'";
	$r = mysqli_query($link,$consulta);
	$num = mysqli_num_rows($r);

	$consul = "select *  from usuarios where usuario = '$_POST[usuario]'";
	$re = mysqli_query($link,$consul);
	$nume = mysqli_num_rows($re);


	if($num!=0){
		
		header("location: formulario_registro.php?error=Email");
	}

	else if($nume!=0){
		header("location: formulario_registro.php?error=Usuario");
	}

	else if ($_POST['tmptxt'] != $_SESSION['tmptxt']) {
		header("location: formulario_registro.php?error=Codigo");
	}

	else{
		$hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$insert = "insert into usuarios (nombre,email,password,tipo,usuario,apellido) 
		values ('$_POST[nombre]','$_POST[email]','$hash','$_POST[tipo]','$_POST[usuario]','$_POST[apellido]')";
		mysqli_query($link,$insert);
		$con="select id_login from usuarios where usuario = '$_POST[usuario]' ";
		$res = mysqli_query($link,$con);
		$arr = mysqli_fetch_array($res);
		echo mysqli_error($link);
		$insert1 = "insert into usuarios_promo (fk_usuarios,fk_promociones,estatus) 
		values ('$arr[0]','$_POST[promociones]','1')";
		mysqli_query($link,$insert1);
		echo mysqli_error($link);
		header('location:formulario_registro.php?error=bien');
	}
}


function login($link){//1 consultar o validar q los datos registrados en la base de datos y creamos var de sesion y luego mostrar el menu correspondiente
	$sql = "select * from usuarios where usuario = '$_POST[usuario]'";	//igual a lo q viene del formulario me v coger el registro del formulario de la base de datos
	$r= mysqli_query($link,$sql);
	$numero = mysqli_num_rows($r);
	if ($numero == 1) {
		$arr = mysqli_fetch_array($r);//el arreglo q vamos a hacer es para sacar el passsword
		if (password_verify($_POST['password'], $arr['password'])) {//
			$_SESSION['tipo'] = $arr[4];//voy a crear la variable de sesion, voy a crear la de nombre,email,tipo 'tip'es el nombre q yo quiera y el del array el valor de la tabla o se puede usar el nombre de la columna de la base de datos
			$_SESSION['nom'] = $arr['nombre'];
			$_SESSION['id'] = $arr['0'];
			header("location:../index.php");//vamos a enviar al index, la cabecera del archivo llama al URL
		}
		else{
			echo "Clave invalida";
		}
	}	
	else{
		echo "Usuario no existe";
	}

}
?>