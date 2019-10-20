<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>DISTRIBUIDOR HERMES</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

		<!-- Start Bootstrap Carousel HEAD section -->
<script type= "text/javascript" src = "Back/js/countries.js"></script>

	</head>

	<body>
		
		<div class="main-page-wrapper">

			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header">
				<div class="container">
					<a href="index.html" class="logo float-left tran4s"><img src="images/logo/logo.svg" alt="Logo"></a>
					
					<!-- ========================= Theme Feature Page Menu ======================= -->
					<nav class="navbar float-right theme-main-menu one-page-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       	<li class="active"><a href="#home">INICIO</a></li>
							<li><a href="#about-us">NOSOTROS</a></li>
							<li><a href="#service-section">SERVICIOS</a></li>
							<li class="dropdown ">
					<a href="servicios.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">SOPORTE ENVÍOS<i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="#"></a></li>
						<li><a href="#help">NECESITO AYUDA</a></li>
						<li><a href="#Track-section">RASTREAR PAQUETE</a></li>

					</ul>
				</li>
					
				<!--li><a href="Back/admin/index.php">INICIAR SESIÓN</a></li-->
							<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">INICIAR SESIÓN<i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu">
										<li><a href="#"></a></li>
										<li><a href="Back/admin/index.php">ADMINISTRADOR</a></li>
										<li><a href="Back/admin/loginCliente.php">USUARIO</a></li>
									</ul>
							</li>
							<li class="active"><a href="#cost">CALCULAR COSTOS</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
				</div>
			
				

			</header> <!-- /.theme-main-header -->

			




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->

		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>

		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>
	</div> <!-- /.main-page-wrapper -->

		<!-- Placed at the end of the document so the pages load faster -->
<script language="javascript">

	populateCountries("country", "state");

 function populateStates(countryElementId, stateElementId) {

var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;

var stateElement = document.getElementById(stateElementId);

stateElement.length = 0; // Fixed by Julian Woods
stateElement.options[0] = new Option('Selecciona Estado', '');
stateElement.selectedIndex = 0;

var state_arr = s_a[selectedCountryIndex].split("|");

for (var i = 0; i < state_arr.length; i++) {
stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
}
}

function populateCountries(countryElementId, stateElementId) {
// given the id of the <select> tag as function argument, it inserts <option> tags
var countryElement = document.getElementById(countryElementId);
countryElement.length = 0;
countryElement.options[0] = new Option('Selecciona País', '-1');
countryElement.selectedIndex = 0;
for (var i = 0; i < country_arr.length; i++) {
countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
}

// Assigned all countries. Now assign event listener for the states.

if (stateElementId) {
countryElement.onchange = function () {
	populateStates(countryElementId, stateElementId);
};
}
}

function calcular() {
 
 // Así obtenemos el valor que se introdujo en el formulario
 var precio = Math.floor((Math.random() * (301-20))+20);
 var dias = Math.floor((Math.random() * (6-2))+2);
 precio = "El costo de tu envio es:" + " " + precio + " " + " USD" + ", " + "y llegaría a su destino en" + " " + dias + " " + "días apróximados";
  
 // Así devolvemos el resultado al formulario
 document.getElementById('resultado').innerHTML = precio;
}  
</script>



	</body>
</html>
