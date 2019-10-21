<?php session_start();?>
<?php 
   header('Access-Control-Allow-Origin: *');
   include_once 'lib/nusoap.php';
   include('../config/conexao.php');
   include('../config/config.php');
   $Tickets= new Tickets();
   $Persistencia = new Persistencia();
   $tipo = $_POST['tipo'];
   $cod = $_POST['cod'];
   $rif = $_POST['rif'];
   $comprador = $_POST['comprador'];
   $fecha = $_POST['fecha'];
   $direc = $_POST['direc'];
   $productos = $_POST['productos'];

   $Clients= new Clients_Staff();
   $Client= new Clients_Staff();
   $Client=$Persistencia->ClientStaffRID($rif);
   $Client->numsolicitudes=$Client->numsolicitudes + 1;
   $Clients = $Persistencia->ClientStaffID($Client->id); 
   $Tickets->tid=rand(200,9999); 
   $Tickets->PesoPaquete=rand(1,20);   
   $Tickets->userid=$Clients->id;
   $Tickets->datee=date("Y-m-d H:i:s");
   $Tickets->rifempresa=$rif;
   $Tickets->DirDestino=$direc;
   $Tickets->producto=$productos;
   $Tickets->empresa=$Client->empresa;
   $Tickets->idcomprador=$comprador;
   $Persistencia->ModificarnumSolicitud($Client);
   $Persistencia->GuardarTickets($Tickets);
   $cod=$Tickets->id;

   $ruta = 'https://glt.com.ve/dist1/Back/admin';

   $cliente = new nusoap_client($ruta."/".$tipo.".php?wsdl",true);
   $cliente -> setEndpoint($ruta."/".$tipo.".php"); 
   if($cod == '' && $tipo == "solicitud"){
      $parametros = array('tipo'=>$tipo,'rif'=>$rif,"comprador"=>$comprador,"fecha"=>$fecha,"direc"=>$direc, "productos"=>$productos);
      $data = $cliente->call("MiFuncion", $parametros);
      if ($data == null) {
         $error = "No respondio";
         $data = json_encode(array('tipo'=>$tipo, 'error'=> "Error: Servicio no disponible de solicitud"));
      }
   }else{
      if($tipo == "confirmacion" && $cod !=' '){
         $parametros = array('tipo'=>$tipo,'cod'=>$cod,'rif'=>$rif,"comprador"=>$comprador,"fecha"=>$fecha);
         $data = $cliente->call("MiFuncion", $parametros);
         if ($data == null) {
            $error = "No respondio";
            $data = json_encode(array('tipo'=>$tipo, 'error'=> "Error: Servicio no disponible"));
         }
      }else{
         $data = json_encode(array('tipo'=>$tipo, 'error'=> "Error: se equivoco en el tipo de servicio"));
      }
   }
   
   echo $data;
?>
