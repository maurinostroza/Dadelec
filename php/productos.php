<?php
	require_once('conection.php');//si se incluye el archivo no lo vuelve a incluir.

	$con = conectar();
	mysql_set_charset('utf8');
?>
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
		<script type="text/javascript" src="../assets/plugins/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="../assets/js/onwScripts.js"></script>
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
			<script src="assets/plugins/respond.js"></script>
		<![endif]-->
	</head>
	
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
										<a href="../php/productos.php">PRODUCTOS <span>tecnología</span></a>

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
			<!-- /OWL SLIDER -->

			<section class="page-title">
				<div class="container">

					<header>

						<ul class="breadcrumb"><!-- breadcrumb -->
							<li><a href="#">Productos</a></li>
							<li class="active"></li>
						</ul><!-- /breadcrumb -->

						<h2><!-- Page Title -->
							<strong>Productos</strong> Tecnología
						</h2><!-- /Page Title -->

					</header>

				</div>			
			</section>


			<!-- CONTENT -->
			<section>
				<div class="container">

					<!-- PRODUCT LIST -->
					<div class="row">

						<div class="col-md-3">

							<!-- SIDE NAV -->
							<ul class="side-nav list-group" id="sidebar-nav">

								<li class="list-group-item ">   <!-- NOTE: "active" to be open on page load -->                
									<a data-toggle="collapse" data-parent="#sidebar-nav" onclick="javascript:$.fn.cargarProductosMarca();">Productos Destacados</a>
								</li>

								<li class="list-group-item ">   <!-- NOTE: "active" to be open on page load -->                
									<a data-toggle="collapse" data-parent="#sidebar-nav" onclick="javascript:PruebaScript(1);">Sistemas Interactivos</a>
								</li>

								<li class="list-group-item">   <!-- NOTE: "active" to be open on page load -->                
									<a data-toggle="collapse" data-parent="#sidebar-nav" href="#" onclick="javascript:PruebaScript(2);"> Circuito Cerrado de TV</a>
								</li>

								<li class="list-group-item ">   <!-- NOTE: "active" to be open on page load -->                
									<a data-toggle="collapse" data-parent="#sidebar-nav" onclick="javascript:PruebaScript(3);">Ilumniación LED</a>
								</li>

								<li class="list-group-item ">   <!-- NOTE: "active" to be open on page load -->                
									<a data-toggle="collapse" data-parent="#sidebar-nav" onclick="javascript:PruebaScript(4);">Cajas Tecnológicas </a>
								</li>
							</ul>
							<!-- /SIDE NAV -->

							<!-- BANNER -->
							<hr class="half-margins invisible" />

							<!--<a href="#purchase" rel="nofollow" target="_blank">
								<img class="img-responsive" src="assets/images/shop_banner.png" alt="" />
							</a>-->
							<!-- /BANNER -->

							<!-- FACEBOOK -->
							<!--<div class="hidden-sm">
								<hr class="half-margins invisible" />
								<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fstepofweb&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>
							</div>-->


						</div>

						<div class="col-md-9">


							<!-- PRODUCT LIST -->
							<div class="row" name="DivDinamico" id="DivDinamico">
								<!-- ACA SE LISTAN LOS PRODCUTOS-->
							</div>
							<!-- /PRODUCT LIST -->
						
						</div>

					</div>
					<!-- /PRODUCT LIST -->

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