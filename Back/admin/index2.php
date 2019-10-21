<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Area Administrador - Distribuidor Hermes</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="./jquery/jquery.3.4.js"></script>	
			<script type="text/javascript">
				function Factura() {
					var emitter = $("#emisor").val();
					var receiver = $("#receptor").val();
					var bill_ref_cod = $("#factura").val();
					var amount = $("#monto").val();
					var expdate = $("#fechaEx").val();
					var password = $("#contra").val();
					var description = $("#des").val();
					<?php 
						$authorizationToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NzExNjY4MjIsImV4cCI6MTYwMjI3MDgyMiwiZGF0YSI6eyJpZCI6NiwianVzcl9yaWYiOiJKMTIzNDU2Nzg5IiwianVzcl91c2VyIjo5LCJqdXNyX2VtYWlsIjoicmlvc3JpY2FyZG8xMjM0QGhvdG1haWwuY29tIiwianVzcl9jb21wYW55IjoiSGVybWVzIiwianVzcl9hZGRyZXNzIjoiQ2FyYWNhcyIsImp1c3JfcGhvbmUiOiIxMjM0NTY3ODkwIiwicGFzc3dvcmQiOiIkMnkkMTAkVVlJUmVQNFltNEg2dnpHejhQczRjTzdSU2tyMGUuV2xKMjhoLnByXC9SdDRHT0hHYnRSdVBtIiwicV9yZWNvdmVyeSI6IkhvbGE_IiwiYV9yZWNvdmVyeSI6IkJpZW4iLCJhY3RpdmUiOjEsImp1c3JfY3JlYXRlZF9hdCI6IjIwMTktMTAtMTUgMTg6NDc6NDQiLCJqdXNyX3VwZGF0ZWRfYXQiOiIyMDE5LTEwLTE1IDE4OjUwOjU2IiwianVzcl9kZWxldGVkX2F0IjpudWxsfX0.YDd6Yet4TxHOB65RElvDjd5hju9nMoWRf5WbagOYcP4";
					?>
					var miToken = '<?php echo $authorizationToken; ?>';
					$.ajax({
						type: 'post',
						beforeSend: function(request) { 
							request.setRequestHeader("Authorization", miToken); 
						},
						headers: {
							'Authorization': miToken,
						},
						url:  'http://bankoneapi.16mb.com/api/bill',
						data: {"emitter":emitter,"receiver":receiver,"bill_ref_cod":bill_ref_cod,"amount":amount,"expdate":expdate,"description":description},
						success: function(data) {
							//json_data = JSON.parse(data);
							console.log(data);
						},
						error: function(data){
							console.log("Error: ", data);
						}
					});
					return "prueba";
				}
			</script>

	</head>

	<body class="skin-2">
    	<?php if (isset($_SESSION['email']) && isset($_SESSION["id"])){?>
		<?php 
            include('../config/conexao.php');
            include('../config/config.php');
            
            $Clients = new Clients_Staff();
			$Emplados = new Clients_Staff();
			$TicketsActive = new Tickets(); 
            $Persistencia = new Persistencia();
			
			$TicketsActive = $Persistencia->TicketsCOUNTAR(1,2);
			$TicketsActiveRow = (mysql_num_rows($TicketsActive));
        ?>
		<?php include('../view/navbar.php'); ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<?php include('../view/sidebar.php'); ?>	

			<div class="main-content">
			<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="marco marco2">
								<div class="Contenido">
									Introduzca numero de despacho
									<form method="POST">
										<input type="text" name="ticket" >
										<input type="submit" name="submit"value="Encontrar pedido">
									</form>
									<?php
										if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
											$ticket = $_POST["ticket"];
											$Factura= new Factura();
											$Persistencia= new Persistencia();
											$Factura= $Persistencia->FacturaClientTicketID($ticket);
											$monto=$Factura->montocancelar;
											$rif=$Factura->userrif;
											$cod=$Factura->id;
											$fvencimiento= $Factura->fvencimiento;

											?>
										<form action="index.php" method="post">
										<center>
											<h3>Crear factura</h3>
											<h3>RIF del emisor de la factura.</h3>
											<input type="text" id="emisor" value="J123456789"> 
											<h3>RIF de la tienda</h3>
											<input type="text" id="receptor" value=<?php echo $rif; ?>> 
											<h3>Codigo de la factura (8 digitos)</h3>
											<input type="number" id="factura" value=<?php echo $cod; ?>>
											<h3>Monto</h3>
											<input type="number" id="monto" step="0.01" value=<?php echo $monto; ?>>
											<h3>Fecha de expiración (yyyy-mm-dd)</h3>
											<input type="text" id="fechaEx"  value=<?php echo $fvencimiento; ?>>
											<h3>Password</h3>
											<input type="text" id="contra" value="Ra123456$"> 
											<h3>Descripcion (opcional)</h3>
											<input type="text" id="des" value=" "> 
											
										</center>
										<br>
										<center><button type="button" onclick="Factura()">Emitir</button></center><br>
									</form>
                      				<?php	}
									?>
							
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>

			<div class="footer">
				<?php include('../view/footer.php'); ?>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->




		<!--[if !IE]> -->
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>


<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/jquery.easypiechart.min.js"></script>
		<script src="../assets/js/jquery.sparkline.index.min.js"></script>
		<script src="../assets/js/jquery.flot.min.js"></script>
		<script src="../assets/js/jquery.flot.pie.min.js"></script>
		<script src="../assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
<?php }else{echo '<script language="javascript"> location.href="index.php";</script>';}?>
	</body>
</html>
