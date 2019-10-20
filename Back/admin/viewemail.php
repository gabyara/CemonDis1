 <?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION["id"])){

include('../config/conexao.php');
include('../config/config.php');

$FacturaID = new Factura();
$Persistencia = new Persistencia();

$FacturaID = $Persistencia->FacturaClientID($_REQUEST['id']);

echo $FacturaID->message;
	
}else{echo '<script language="javascript"> location.href="index.php";</script>';}

?>