<?php

	include ("conexion.php");
	$conexion = mysql_connect("$servidor","$usuario","$password");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
	isset($_POST['descripcion']) && !empty($_POST['descripcion'])&&
	isset($_POST['precio']) && !empty($_POST['precio'])) {

		if (!$conexion) {
			die('NO CONECTO A LA BASE DE DATOS'.mysql_error());
		}	

		mysql_select_db("$database",$conexion);
		$sql="INSERT INTO productos(nombre,descripcion,precio) 
		VALUES('$_POST[nombre]','$_POST[descripcion]','$_POST[precio]')";
		mysql_query($sql);

	} else {
		echo "FALTAN DATOS";
	}
	header('Location: formulario.php');
	
	mysql_close($conexion);
?>


