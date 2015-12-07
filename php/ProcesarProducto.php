<script type="text/javascript" src="../assets/js/onwScripts.js"></script>

	<?php
	require_once('conection.php');//si se incluye el archivo no lo vuelve a incluir.

	

	$con = conectar();

	//Recibir info
	mysql_query("SET NAMES 'utf8'");
	$nombreProducto = strip_tags($_POST['nombreProducto']); //strip_tags elimina las etiquetas HTML
	$precioProd = strip_tags($_POST['precioProd']);
	$codigoProd = strip_tags($_POST['codigoProducto']);//sha1 encripta la pass
	$categoriaProd = strip_tags($_POST['categoriaProducto']);
	$descripcionProd = strip_tags($_POST['descripcionProducto']);
	$caractProd = strip_tags($_POST['caracteristicasProducto']);
	$marcaProd = strip_tags($_POST['marcaProducto']);
	

	
	$ingresar =@mysql_query("CALL Sp_insertar_prod ('".$codigoProd."',".$precioProd.",".$categoriaProd.",'".$nombreProducto."','".$descripcionProd."','".$caractProd."',".$marcaProd.")"); 

	//Se agrega la ruta de la imagen 

	$nombreFoto = $_FILES['imgPrincipal']['name'];
	$ruta=$_FILES['imgPrincipal']['tmp_name'];
	if($ingresar == 1)
	{	
		$queryProducto ='SELECT * FROM producto ORDER BY prod_id DESC LIMIT 1';

		$resultProducto = mysql_query($queryProducto, $con);
		while ($producto = mysql_fetch_assoc($resultProducto)) {
		
			$destino="../img_productos/".$producto['prod_id']."_".$producto['prod_codigo']."_".$producto['cat_id']."_princ.png";
			copy($ruta, $destino);
			

			$resultado = @mysql_query("	INSERT INTO imagen(prod_id, img_ruta_principal)
					 					VALUES (".$producto['prod_id'].",'".$destino."')") ;

			if($resultado ==1){
				echo '<script> PruebaGraba(1); </script>';
			}else{
				echo '<script> PruebaGraba(0); </script>';
			}
		}

	}else{
		echo '<script> PruebaGraba(0); </script>';
	}

	/*if($ingresar!=false && $resultProducto!=false)
	{
		echo '<script> PruebaGraba(1); </script>';
	}else{
		echo '<script> PruebaGraba(0); </script>';
	}*/


	
?>
