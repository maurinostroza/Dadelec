<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Dadelec - Innovación y Tecnología</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- Favicon -->
		<link rel="shortcut icon" href="../assets/images/demo/favicon.png" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/sky-forms.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/weather-icons.min.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/line-icons.css" rel="stylesheet" type="text/css" />
		<link href="../assets/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
		<link href="../assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/flexslider.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="../assets/css/revolution-slider.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/layerslider.css" rel="stylesheet" type="text/css" />

		<!-- SHOP -->
		<link href="../assets/css/layout-shop.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="../assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/header-default.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/footer-default.css" rel="stylesheet" type="text/css" />
		<link href="../assets/css/color_scheme/red.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- Morenizr -->
		<script type="text/javascript" src="../assets/plugins/modernizr.min.js"></script>

		<!--[if lte IE 8]>
			<script src="../assets/plugins/respond.js"></script>
		<![endif]-->
	</head>
	
	<!-- 
		Available body classes: 
			smoothscroll			= enable chrome browser smooth scroll
			grey 					= grey content background
			boxed 					= boxed style
			pattern1 ... pattern10 	= background pattern

		Background Image - add to body: 
			data-background="../assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll">

		<div id="wrapper">

						<div id="header"><!-- class="sticky" for sticky menu -->

				<!-- Top Bar -->
				<header id="topBar">
					<div class="container">

						<div class="pull-right fsize13 margin-top10 hide_mobile">

							<!-- mail , phone -->
							<a href="mailto:dadelec@dadelec.cl">dadelec@dadelec.cl</a> &bull; (562) 25513064

							<div class="block text-right"><!-- social -->
								<a href="https://www.facebook.com/dadelec" class="social fa fa-facebook"></a>
								<a href="https://twitter.com/dadelec2016" class="social fa fa-twitter"></a>
								<!--<a href="#" class="social fa fa-google-plus"></a>
								<a href="#" class="social fa fa-linkedin"></a>
								<a href="#" class="social fa fa-pinterest"></a>-->
							</div><!-- /social -->

						</div>

						<!-- Logo -->
						<a class="logo" href="index.html">
							<img src="../assets/images/logo.png" height="50" alt="" />
						</a>

					</div><!-- /.container -->
				</header>
				<!-- /Top Bar -->


				<!-- Top Nav -->
								<header id="topNav">
					<div class="container">

						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Search -->
						<!--<form class="search" method="get" action="page-search.html">
							<input type="text" class="form-control" name="s" value="" placeholder="Search">
							<button class="fa fa-search"></button>
						</form>
						<!-- /Search -->

						<!-- Top Nav -->
						<div class="navbar-collapse nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li>
										<a href="../index.html">
											HOME <span>bienvenido</span>
										</a>
									</li>

									<li class="active">
										<a href="productos.php">PRODUCTOS <span>tecnología</span></a>

									</li>
									<li>
										<a href="../servicios.html">SERVICIOS <span>dedicación</span></a>
										
									</li>
									<li>
										<a href="../about.html">NUESTRA EMPRESA <span>quienes somos</span></a>
									</li>

									<li>
										<a href="../imageGalery.html">GALERIA<span>imágenes</span></a>
									</li>



									<li>
										<a href="../contacto.html">CONTACTO <span>escribenos</span></a>
									</li>
									
								</ul>

							</nav>
						</div>
						<!-- /Top Nav -->

					</div><!-- /.container -->
				</header>
				<!-- /Top Nav -->

			</div>

			<?php
							require_once('conection.php');//si se incluye el archivo no lo vuelve a incluir.

							$con = conectar();
							mysql_set_charset('utf8');
							
							$id = $_GET['idProducto'];

							//if ($id > 0){
							//vamos a crear nuestra consulta SQL
							$consulta = "SELECT * FROM producto WHERE prod_id =".$id;
							$resultado= @mysql_query($consulta) or die(mysql_error());

							$consultaImg = "SELECT * FROM imagen WHERE prod_id =".$id;
							$resultadoImg= @mysql_query($consultaImg) or die(mysql_error());

							//si el resultado fue exitoso
							//obtendremos el dato que ha devuelto la base de datos
							$producto = mysql_fetch_array($resultado);
							$imagen = mysql_fetch_array($resultadoImg);

							//ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
						?>


			<!-- CONTENT -->
			<section>
				<div class="container">

					<div class="row">

						<div class="col-md-6 col-sm-6">

							<figure class="product-view-image"><!-- product image -->
								<img id="product-main-image" class="img-responsive" src="<?php echo $imagen['img_ruta_principal'];?>" width="620" height="620" alt="" />
							</figure>

						</div>

						<div class="col-md-6 col-sm-6">

							<h1 class="product-view-title"><?php echo $producto['prod_nombre']; ?></h1>
							<h3 class="product-view-price"><em>$<?php echo number_format($producto['prod_precio'], 0, '', '.'); ?></em></h3>
							<p>
								<?php echo $producto['prod_descripcion']; ?>
								<strong>PR-0123456</strong>
							</p>

							<hr class="half-margins" />

							<span id="product-view-stock-info" class="shop-stock-info stock-yes"><!-- stock -->
								<i class="fa fa-check"></i> in stock
							</span><!-- /stock -->

							<!-- see the bottom of the page for the script -->
							<!--<section class="product-view-colors">
								<a data-color="white"  data-src="<?php echo $imagen['img_ruta_principal'];?>" class="active" href="#"><img src="<?php echo $imagen['img_ruta_principal'];?>" height="70" alt="" /></a>
								<a data-color="black"  data-src="<?php echo $imagen['img_ruta_1'];?>" href="#"><img src="<?php echo $imagen['img_ruta_1'];?>" height="70" alt="" /></a>
								<a data-color="pink"   data-src="<?php echo $imagen['img_ruta_2'];?>" href="#"><img src="<?php echo $imagen['img_ruta_2'];?>" height="70" alt="" /></a>
								<a data-color="purple"  data-src="<?php echo $imagen['img_ruta_3'];?>" href="#"><img src="<?php echo $imagen['img_ruta_3'];?>" height="70" alt="" /></a>
							</section>-->

							<hr class="half-margins" />


							<p class="fsize11">
								<?php echo $producto['prod_caracteristicas']; ?>
							</p>

						</div>

					</div>

					<hr />


					<!-- CALLOUT -->
					
					<!-- /CALLOUT -->

				</div>
			</section>
			<!-- /CONTENT -->



			<!-- FOOTER -->
<footer id="footer">
				<div class="container">

					<div class="row">

						<!-- col #1 -->
						<div class="logo_footer col-md-8">

							<img alt="" src="../assets/images/logo.png" height="50" class="logo" />

							<p class="block">
								
								<h2>(562) 25513064</h2>
							</p>
						</div>
						<!-- /col #1 -->

						<!-- col #2 -->
						<div class="spaced col-md-4">
							<h4>Acerca de <strong>Nosotros</strong></h4>
							<p>
								El lugar en donde encontrarás la mayor tecnología para tu empresa.
							</p>

							<h4><small><strong>Suscribete a nuestro Newsletter</strong></small></h4>
							<form id="newsletterSubscribe" method="post" action="newsletter.php" class="input-group">
								<input required type="email" class="form-control" name="newsletter_email" id="newsletter_email" value="" placeholder="Correo Electrónico">
								<span class="input-group-btn">
									<button class="btn btn-primary">SÚSCRIBETE</button>
								</span>
							</form>

						</div>
						<!-- /col #2 -->

					</div>

				</div>

				<hr />

				<div class="copyright">
					<div class="container text-center fsize12">
						Design by <a href="http://www.webmates.cl" target="_blank" title="bootstrap themes &amp; templates" class="copyright">WEBMATES</a> &bull; All Right Reserved &copy; Dadelec LLC. &nbsp;
						<a href="page-privacy.html" class="fsize11">Politicas de Privacidad</a> &bull; 
						<a href="page-terms.html" class="fsize11">Terminos de Servicios</a>
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->

			<a href="#" id="toTop"></a>

		</div><!-- /#wrapper -->

		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript" src="../assets/plugins/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/jquery.isotope.js"></script>
		<script type="text/javascript" src="../assets/plugins/masonry.js"></script>

		<script type="text/javascript" src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/knob/js/jquery.knob.js"></script>
		<script type="text/javascript" src="../assets/plugins/flexslider/jquery.flexslider-min.js"></script>

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="../assets/plugins/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="../assets/plugins/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="../assets/js/revolution_slider.js"></script>

		<script type="text/javascript" src="../assets/js/scripts.js"></script>


		<!-- SHOP OPTIONS -->
		<script type="text/javascript">

			/* 
				SHOP COLOR/SIZE/QTY SELECTOR EXAMPLE 
				If you use this script, keep it here, under jQuery.
				Or move it to your custom.js (after scripts.js)
			*/

			/**
				@COLOR SELECTOR
			**/
			jQuery('section.product-view-colors a').bind("click", function(e) {
				e.preventDefault();

				/** Reset the selected thumbnail **/
				jQuery('.product-view-colors a').removeClass('active');  
				jQuery(this).addClass('active');

				/** add the color (value) to the hidden input, inside the form **/
				jQuery("input#color").val(jQuery(this).attr('data-color').trim());


				/** CHANGE BIG IMAGE **/
				jQuery("#product-main-image").attr('src', jQuery(this).attr('data-src'));


				/**
					@CHANGE STOCK INFO 
				**/
				/* stock color */
				var data_stock = jQuery(this).attr('data-stock').trim();
				jQuery("#product-view-stock-info").removeClass('stock-yes stock-no');
				jQuery("#product-view-stock-info").addClass('stock-' + data_stock);

				/* stock icon */
				jQuery("#product-view-stock-info i").removeClass('fa-check fa-times');
				if(data_stock == 'yes') {
					jQuery("#product-view-stock-info i").addClass('fa-check');
				} else {
					jQuery("#product-view-stock-info i").addClass('fa-times');
				}

			});


			/**
				@SIZE SELECTOR 
			**/
			jQuery("#product-size-dd li a").bind("click", function(e) {
				e.preventDefault();

				var data_val = jQuery(this).attr('data-val').trim();

				/* change visual value and hidden input */
				jQuery("#product-selected-size>span").empty().append(data_val);
				jQuery("#size").val(data_val);

				/* change visual selected */
				jQuery("#product-size-dd li").removeClass('active');
				jQuery(this).parent().addClass('active');
			});


			/**
				@QTY SELECTOR 
			**/
			jQuery("#product-qty-dd li a").bind("click", function(e) {
				e.preventDefault();
				
				var data_val = jQuery(this).attr('data-val').trim();

				/* change visual value and hidden input */
				jQuery("#product-selected-qty>span").empty().append(data_val);
				jQuery("#qty").val(data_val);

				/* change visual selected */
				jQuery("#product-qty-dd li").removeClass('active');
				jQuery(this).parent().addClass('active');
			});

		</script>

	</body>
</html>