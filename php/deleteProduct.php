<?php
	require_once('conection.php');//si se incluye el archivo no lo vuelve a incluir.

	$con = conectar();
	mysql_set_charset('utf8');

	$id = $_GET['idProducto'];

	$EliminarImagen ='delete from producto where prod_id ='.$id;
	$EliminarProducto ='delete from imagen where prod_id ='.$id;

	$resultImagen = mysql_query($EliminarImagen, $con);
	$resultProducto = mysql_query($EliminarProducto, $con);



?>