<?php

function conectar(){
	$user="dadelec_dadelec";
	$pass="Dadelec2016";
	$server="localhost";
	$db="dadelec_dadelecBD";
	$con=mysql_connect($server, $user, $pass) or die ("Error al conectar a la base de datos".mysql_error());
	mysql_select_db($db,$con);

	return $con;
}

?>
