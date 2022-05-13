<?php
	/**  
	 * Procesa los datos enviados desde el formulario
	 * de acceso
	 */
//	include '../_lib/config.php';
	session_start();

	// Solo se debe llegar aquí con un post
	if (!isset($_POST['password'])) {
		header("location:login.php");
	}

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	// // Definimos la variable  y le asignamos el valor de la consulta
	// $consulta = "select * from usuarios where alias = '$usuario'";
	// $resultado=mysql_query($consulta) or die (mysql_error());

	// // Almacenamos los valores resultantes en el arreglo registro
	// $registro=mysql_fetch_assoc($resultado);

	// // Para pasar la validación es necesario que la consulta devuelva
	// // al menos un registro y que el password enviado coincida con el registro
	// if (mysql_num_rows($resultado)>0 && $password == $registro['paswd']) {
	// 	$_SESSION['validado'] = "ok";
	// 	$_SESSION['alias'] = $registro['alias'];
	// 	$_SESSION['email'] = $registro['email'];
	// 	$_SESSION['id_Usuario'] = $registro['id_Usuario'];
	// 	header("location:listado.php");
	// } else {
	// 	header("location:login.php?incorrect=true");
	// }


	// Para pasar la validación es necesario que la consulta devuelva
	// al menos un registro y que el password enviado coincida con el registro
	//if ($usuario == "admin" && $password == "TIC2019*") {
	if ($usuario == "admin" && $password == "irisymontse123") {
		$_SESSION['validado'] = "ok";
		$_SESSION['alias'] = $registro['alias'];
		$_SESSION['email'] = $registro['email'];
		$_SESSION['id_Usuario'] = $registro['id_Usuario'];
		header("location:index.php");
	} else {
		header("location:login.php?incorrect=true");
	}


