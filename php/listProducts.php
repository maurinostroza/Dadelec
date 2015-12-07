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
		<script type="text/javascript" src="../assets/js/onwScripts.js"></script>
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

	<?php
	require_once('conection.php');//si se incluye el archivo no lo vuelve a incluir.

	$con = conectar();
	mysql_set_charset('utf8');
	
?>
	
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

			<div id="header"> <!-- class="sticky" for sticky menu -->

				<!-- Top Bar -->
				<div id="header"><!-- class="sticky" for sticky menu -->

				<!-- Top Bar -->
				<header id="topBar">
					<div class="container">

						<div class="pull-right fsize13 margin-top10 hide_mobile">

							<!-- mail , phone -->
							<a href="dadelec@dadelec.cl">dadelec@dadelec.cl</a> &bull; (562) 25513064

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

									<li>
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



			<!-- PAGE TOP -->
			<section class="page-title">
				<div class="container">

					<header>

						<ul class="breadcrumb"><!-- breadcrumb -->
							<li><a href="#">Producto</a></li>
							<li class="active">Agregar Productos</li>
						</ul><!-- /breadcrumb -->

						<h2><!-- Page Title -->
							<strong>Agregar</strong> Productos
						</h2><!-- /Page Title -->

					</header>

				</div>			
			</section>
			<!-- /PAGE TOP -->



			<!-- CONTENT -->
			<section>
				<div class="container">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Nombre Producto</th>
									<th>Fecha Ingreso</th>
									<th>Código Producto</th>
									<th>Precio Producto</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$queryProducto ='SELECT * FROM producto ORDER BY producto.prod_id desc';
									$resultProducto = mysql_query($queryProducto, $con);
									while ($producto = mysql_fetch_assoc($resultProducto)) 
									{
								?>
										<tr>
											<td><?php echo $producto['prod_nombre']; ?></td>
											<td><?php echo $producto['prod_fecha']; ?></td>
											<td><?php echo $producto['prod_codigo']; ?></td>
											<td>$<?php echo number_format($producto['prod_precio'], 0, '', '.'); ?></td>
											<td><a class="btn default btn-xs bg-red white" onclick="javascript:EliminarProducto(<?php echo $producto['prod_id'];?>);"><i class="fa fa-times white"></i> Eliminar </a></td>
										</tr>
								<?php
									}
								?>
										
							</tbody>
						</table>
					</div>
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
								<p>
									<strong><em>Por que elegirnos?</em></strong> 
									Instalaciones electricas, corrientes debiles, redes de cableado horizontar y vertical, equipos activos y pasivos perifericos,
									planos electricos, tableros, obras civiles, iluminación exterior e interior.
									Pizarras y sistema interactivo, software eTouch, proyectores y pantallas todo en uno.
									Camaras de seguridad IP, NVR, DVR y software para cámaras.
									<a href="#">Ver Más <i class="fa fa-arrow-right"></i></a>
								</p>
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
							<form id="newsletterSubscribe" method="post" action="php/newsletter.php" class="input-group">
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
	</body>
</html>