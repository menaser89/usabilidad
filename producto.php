<?php
	include ("conexion.php");
	$conexion = mysql_connect("$servidor","$usuario","$password");
	if (!$conexion) {
		die('NO CONECTO A LA BASE DE DATOS'.mysql_error());
	}

	mysql_select_db("$database",$conexion);
	$consulta = mysql_query("SELECT * from productos");


	while ($array = mysql_fetch_array($consulta)){
		echo $array['ID'],"---> ",$array['NOMBRE']," | ", $array['DESCRIPCION']," | ", $array['PRECIO'], "€ <br>";
	}
	mysql_close($conexion);
?>