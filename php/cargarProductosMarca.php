<?php
	require_once('conection.php');//si se incluye el archivo no lo vuelve a incluir.

	$con = conectar();
	mysql_set_charset('utf8');

								$query ='select p.prod_id,p.prod_nombre, p.prod_precio, p.prod_codigo, i.img_id, i.img_ruta_principal
										from  producto as p, imagen as i
										where p.prod_id = i.prod_id
										and prod_marca=1';
										
								$result = mysql_query($query, $con);
								//$rows = $result->fetchAll();
								echo'<h2>Productos <strong>Destacados</strong></h2>';
								?>
								
								<?php
								while ($producto = mysql_fetch_assoc($result)) {
								?>

								<div class="col-md-4 col-sm-4"><!-- item -->
									<a class="shop-item-list" href="shop_product.php?idProducto=<?php echo $producto['prod_id']; ?>">
										<figure><!-- image -->
											<img class="img-responsive" src="<?php echo $producto['img_ruta_principal'];?>" alt="" />
										</figure><!-- /image -->
										<span class="shop-stock-info stock-yes"><!-- stock -->
											 COD:<?php echo $producto['prod_codigo']; ?>
										</span><!-- /stock -->
										<div class="product-info"><!-- title and price -->
											<h2>
												<span class="product-name"><?php echo $producto['prod_nombre']; ?></span>
												<span class="bold">$<?php echo number_format($producto['prod_precio'], 0, '', '.'); ?></span>
											</h2>
										</div><!-- /title and price -->
										
									</a>
								</div><!-- /item -->
								<?php
									}
								?>