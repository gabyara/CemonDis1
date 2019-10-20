<?php
//Generador Facebook				

$gestor = fopen("../../novedades/".str_replace(" ", "-", strtolower($Novedades->title)).".html", "w"); 
$tilde = "'";
$urlserver = "https://glt.com.ve";
fwrite($gestor, '<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>'.$Novedades->title.'</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="'.$Novedades->title.'" />
<meta property="og:url" content="'.$urlserver.'/novedades/'.str_replace(" ", "-", strtolower($Novedades->title)).'.html" />
<meta property="og:title" content="'.$Novedades->title.'" />
<meta property="og:description" content="'.$Novedades->description.'" />
<meta property="og:image" content="'.$urlserver.'/img/novedades/'.$Novedades->img.'" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@GLT">
<meta name="twitter:creator" content="@GLT">
<meta name="twitter:title" content="'.$Novedades->title.'">
<meta name="twitter:description" content="<p>'.$Novedades->description.'</p>">
<meta name="twitter:image" content="'.$urlserver.'/img/novedades/'.$Novedades->img.'">

<meta itemprop="name" content="'.$Novedades->title.'">	
<meta itemprop="description" content="'.$Novedades->description.'">
<meta itemprop="image" content="'.$urlserver.'/img/novedades/'.$Novedades->img.'">

<!-- css -->
<link href="'.$urlserver.'/css/bootstrap.min.css" rel="stylesheet" />
<link href="'.$urlserver.'/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="'.$urlserver.'/css/style.css" rel="stylesheet" />
<link rel="shortcut icon" type="img/x-icon" href="../img/favicon.ico">

<!-- Theme skin -->
<link id="t-colors" href="'.$urlserver.'/skins/default.css" rel="stylesheet" />

<!-- boxed bg -->
<link id="bodybg" href="'.$urlserver.'/bodybg/bg1.css" rel="stylesheet" type="text/css" />

</head>
<body>
 <div id="wrapper">
	<!-- start header -->
	<header>	
		<div class="navbar navbar-default navbar-static-top" style="background-color: rgba(23, 22, 22, 0.84);">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="'.$urlserver.'/img/logo.png" alt="" width="199" height="52" /></a>
				</div>
				<div class="leng" id="leng">
					<span>
						<a style="color:#ece9e1;" href="https://glt.com.ve/en/" class="dropdown-toggle">EN</a> | 
					</span>
					<span class="active">
						<a href="#" class="dropdown-toggle">ES</a>
					</span>
				</div>
				<div class="navbar-collapse collapse ">
					<ul class="nav navbar-nav ">
						<li class="dropdown">
							<a href="'.$urlserver.'/servicio.php" class="dropdown-toggle">Servicios</a>	
						</li>
						<li class="dropdown">
							<a href="'.$urlserver.'/novedades.php" class="dropdown-toggle">Novedades </a>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Nosotros <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="'.$urlserver.'/resumen-corporativo.php">Resumen Corporativo</a></li>
								<li><a href="'.$urlserver.'/mision.php">Misi&oacute;n</a></li>
								<li><a href="'.$urlserver.'/vision.php">Visi&oacute;n</a></li>
								<li><a href="'.$urlserver.'/filosofia.php">Nuestra Filosofia</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="'.$urlserver.'/contact.php">Contactanos</a></li>
						<li class="dropdown"><a href="'.$urlserver.'/login.php">Iniciar Sesión</a></li>
					</ul>
				</div>
			</div>
		</div>
        
	</header>
	<!-- end header -->
    <section id="inner-headline" style="top: 0px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="'.$urlserver.'/index.php"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class=""><a href="'.$urlserver.'/novedades.php" class="dropdown-toggle">Novedades </a></li>
					<li class="active"><i class="icon-angle-right"></i>'.$Novedades->title.'</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
        <div class="container">
		<div class="row demobtn">
		
        <div class="col-lg-12">
				<article>
						<div class="post-image">
							<div class="post-heading"><h2>'.$Novedades->title.'</h2></div>
							<div class="col-lg-12">
								<img src="'.$urlserver.'/img/novedades/'.$Novedades->img.'" alt="" class="img-responsive" />
							</div>
						</div>
						<p style="font-size: 24px;">'.$Novedades->description.'</p>
						<div class="bottom-article">
							<ul class="meta-post">
							<div id="fb-root"></div>
							<div class="fb-share-button" data-href="'.$urlserver.'/novedades/'.str_replace(" ", "-", strtolower($Novedades->title)).'.html" data-layout="button_count"></div>
							<a href="https://twitter.com/share" class="twitter-share-button" data-via="@serviciosGLT" data-related="@serviciosGLT">Tweet</a>
							<a onclick="javascript:window.open(this.href,'.$tilde.$tilde.', '.$tilde.'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'.$tilde.');return false;" href="https://plus.google.com/share?url='.$urlserver.'/novedades/'.str_replace(" ", "-", strtolower($Novedades->title)).'.html"><div class="g-plus" data-action="share"></div></a>
							

							</ul>
						</div>
				</article>
			</div>
			</div>
	</div>
		<!-- end divider -->
	</section>
	
	<footer>
		<div class="container">
	<div class="row">
		<div class="col-sm-4 col-lg-4">
			<div class="widget">
				<h4>Póngase en contacto con nosotros</h4>
				<address>
				<strong> GLT Servicio<br>RIF: J-405297786 </strong><br>
				  Avenida Arístides Calvani, 1ra. Transversal<br>
				 Quinta Cochaima # 23-A. <br>
				 Urbanización Los Chorros - 1071.<br>
				 Caracas, Venezuela </address>
				<p>
					<i class="icon-phone"></i> (+58) 414 2262125<br>(+58) 414 3319265<br>(+58) 414 2758010<br>(+58) 414 3215569<br>
					<i class="icon-envelope-alt"></i> servicios@glt.com.ve
				</p>
			</div>
		</div>
		<div class="col-sm-4 col-lg-4">
			<div class="widget">
				<h4>Informatión</h4>
				<ul class="link-list">
					<li><a href="#">Terminos y condiciones</a></li>
					<li><a href="#">Políticas de privacidad</a></li>
					<li><a href="'.$urlserver.'/contact.php">Contactanos</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4 col-lg-4">
			<div class="widget">
				<h4>Paginas</h4>
				<ul class="link-list">
					<li><a href="'.$urlserver.'/servicio.php">Servicios</a></li>
					<li><a href="'.$urlserver.'/novedades.php">Novedades</a></li>
					<li><a href="'.$urlserver.'/resumen-corporativo.php">Resumen Corporativo</a></li>
					<li><a href="'.$urlserver.'/mision.php">Misión</a></li>
					<li><a href="'.$urlserver.'/vision.php">Visión</a></li>
					<li><a href="'.$urlserver.'/filosofia.php">Nuestra Filosofia</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="sub-footer">
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="copyright">
				<p>©  GLT Servicio - All Right Reserved</p>
			</div>
		</div>
		<div class="col-lg-6">
			<ul class="social-network">
				<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
	</div>
</div>
</div>
<div id="google_translate_element" style="position: fixed;bottom: 0px;"></div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="'.$urlserver.'js/analytics-translater-tawk.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://apis.google.com/js/platform.js" async defer>{lang: '.$tilde.'es-419'.$tilde.'}</script>
<script src="'.$urlserver.'/js/connect-facebook.js"></script>
<script src="'.$urlserver.'/js/connect-twitter.js"></script>
<script src="'.$urlserver.'/js/jquery.min.js"></script>
<script src="'.$urlserver.'/js/modernizr.custom.js"></script>
<script src="'.$urlserver.'/js/jquery.easing.1.3.js"></script>
<script src="'.$urlserver.'/js/bootstrap.min.js"></script>
<script src="'.$urlserver.'/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="'.$urlserver.'/plugins/flexslider/flexslider.config.js"></script>
<script src="'.$urlserver.'/js/jquery.appear.js"></script>
<script src="'.$urlserver.'/js/stellar.js"></script>
<script src="'.$urlserver.'/js/classie.js"></script>
<script src="'.$urlserver.'/js/uisearch.js"></script>
<script src="'.$urlserver.'/js/jquery.cubeportfolio.min.js"></script>
<script src="'.$urlserver.'/js/google-code-prettify/prettify.js"></script>
<script src="'.$urlserver.'/js/animate.js"></script>
<script src="'.$urlserver.'/js/custom.js"></script>
      
</body>

</html>

');
fclose($gestor);

?>