<?php
class Clients_Staff{
	var $id;
	var $id_profile;
	var $rif;
	var $numsolicitudes;
	var $email;
	var $pass;
	var $address;
	var $city;
	var $state;
	var $phonenumber;
	var $fecha;
	var $status;
	var $empresa;
	}
class Factura{
	var $id;
	var $userid;
	var $idticket;
	var $montocancelar;
	var $descripcion;
	var $femision;
	var $status;
	var $fvencimiento;
	var $userrif;	
	}

class Tickets{
	var $id;
	var $tid;
	var $userid;
	var $facturaid;
	var $rifempresa;
	var $empresa;
	var $email;
	var $DirDestino;
	var $PesoPaquete;
	var $datee;
	var $producto;
	var $precio;
	var $ruta;
	var $status;
	var $idcomprador;
	var $DirActual;	
	}
class Persistencia{
	function LoginUser($izuzu,$pass,$profile){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu' AND pass='$pass' AND id_profile = ".$profile."");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->tid = $row['tid'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		return $Clients_Staff;
		}
	function LoginUserAdmin($izuzu,$pass){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu' AND pass='$pass'");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->rif = $row['rif'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		return $Clients_Staff;
		}
	function VerifyEmail($izuzu,$profile){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu' AND id_profile = ".$profile."");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->tid = $row['tid'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		return $Clients_Staff;
		}
	function VerifyEmailAdmin($izuzu){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT * FROM clients_staff WHERE email='$izuzu'");
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->tid = $row['rif'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->address = $row['address'];		
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->datee = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		return $Clients_Staff;
		}
	
	function ClientStaffID($Id){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM clients_staff WHERE id = '.$Id.'');
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->rif = $row['rif'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->address = $row['address'];
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->fecha = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		return $Clients_Staff;
		}
		function ClientStaffRID($Rif){
		$Clients_Staff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM clients_staff WHERE rif = '.$Rif.'');
		$Clients_Staff->id = $row['id'];
		$Clients_Staff->id_profile = $row['id_profile'];
		$Clients_Staff->rif = $row['rif'];
		$Clients_Staff->numsolicitudes = $row['numsolicitudes'];
		$Clients_Staff->email = $row['email'];
		$Clients_Staff->pass = $row['pass'];
		$Clients_Staff->address = $row['address'];
		$Clients_Staff->city = $row['city'];
		$Clients_Staff->state = $row['state'];
		$Clients_Staff->phonenumber = $row['phonenumber'];
		$Clients_Staff->fecha = $row['fecha'];
		$Clients_Staff->status = $row['status'];
		$Clients_Staff->empresa = $row['empresa'];
		return $Clients_Staff;
		}	
	function ClientStaffALL($Profile){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT *, TIMESTAMPDIFF(YEAR, fecha, now()) as _year, TIMESTAMPDIFF(MONTH, fecha, now()) % 12 as _month, FLOOR(TIMESTAMPDIFF(DAY, fecha, now()) % 30.4375 ) as _day FROM clients_staff WHERE id_profile = '.$Profile.'');
		return $row;
		}

	function TicketsALLStatus($status,$userid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status.' and userid = '.$userid.' GROUP BY tid');
		return $row;
		}
	function TicketsALL($userid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE userid = '.$userid.' GROUP BY tid ORDER BY status ASC');
		return $row;
		}
	function TicketsCOUNTAR($status1,$status2){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status1.' OR status = '.$status2.' GROUP BY tid');
		return $row;
		}
	function TicketsCOUNT($status,$userid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status.' AND userid = '.$userid.' GROUP BY tid');
		return $row;
		}
	function TicketsALLStatus1($status){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status.' GROUP BY tid');
		return $row;
		}
	function TicketsALLStatus2($status1,$status2){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE status = '.$status1.' OR status = '.$status2.' GROUP BY tid');
		return $row;
		}
	function TicketsALLTID($tid){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM tickets WHERE tid = '.$tid.' ORDER BY id DESC');
		return $row;
		}
	function TicketsTID($TId){
		$Tickets = new Tickets();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM tickets WHERE tid = '.$TId.'');
		$Tickets->id = $row['id'];
		$Tickets->tid = $row['tid'];
		$Tickets->userid = $row['userid'];
		$Tickets->facturaid = $row['facturaid'];
		$Tickets->rifempresa = $row['rifempresa'];
		$Tickets->empresa = $row['empresa'];
		$Tickets->email = $row['email'];
		$Tickets->DirDestino = $row['DirDestino'];
		$Tickets->PesoPaquete = $row['PesoPaquete'];
		$Tickets->datee = $row['datee'];
		$Tickets->producto = $row['producto'];
		$Tickets->precio = $row['precio'];
		$Tickets->ruta = $row['ruta'];
		$Tickets->status = $row['status'];
		$Tickets->DirActual=$row['DirActual'];
		$Tickets->idcomprador=$row['idcomprador'];
		return $Tickets;
		}
		function TicketsIID($TId){
		$Tickets = new Tickets();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM tickets WHERE id = '.$TId.'');
		$Tickets->id = $row['id'];
		$Tickets->tid = $row['tid'];
		$Tickets->userid = $row['userid'];
		$Tickets->facturaid = $row['facturaid'];
		$Tickets->rifempresa = $row['rifempresa'];
		$Tickets->empresa = $row['empresa'];
		$Tickets->email = $row['email'];
		$Tickets->DirDestino = $row['DirDestino'];
		$Tickets->PesoPaquete = $row['PesoPaquete'];
		$Tickets->datee = $row['datee'];
		$Tickets->producto = $row['producto'];
		$Tickets->precio = $row['precio'];
		$Tickets->ruta = $row['ruta'];
		$Tickets->status = $row['status'];
		$Tickets->idcomprador=$row['idcomprador'];
		return $Tickets;
		}
	function FacturaClientALL($userid){
		$Factura = new Factura();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2('SELECT * FROM factura WHERE userid = '.$userid.'');
		return $row;
		}
	function FacturaClientID($id){
		$Factura = new Factura();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM factura WHERE id = '.$id.'');
		$Factura->id = $row['id'];
		$Factura->$idticket= $row['idticket'];
		$Factura->userid = $row['userid'];
		$Factura->montocancelar = $row['montocancelar'];
		$Factura->description = $row['description'];
		$Factura->femision = $row['femision'];
		$Factura->status = $row['status'];
		$Factura->fvencimiento = $row['fvencimiento'];
		$Factura->userrif = $row['userrif'];
		return $Factura;
		}

		function FacturaClientTicketID($ticketid){
		$Factura = new Factura();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl('SELECT * FROM factura WHERE idticket = '.$ticketid.'');
		$Factura->id = $row['id'];
		$Factura->idticket= $row['idticket'];
		$Factura->userid = $row['userid'];
		$Factura->montocancelar = $row['montocancelar'];
		$Factura->descripcion = $row['descripcion'];
		$Factura->femision = $row['femision'];
		$Factura->status = $row['status'];
		$Factura->fvencimiento = $row['fvencimiento'];
		$Factura->userrif = $row['userrif'];
		return $Factura;
		}
	
	function GuardarClients_Staff($Clients_Staff){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO clients_staff (id_profile,tid,numsolicitudes,email,pass,empresa,address,city,state,phonenumber,fecha)
		VALUES(
		'".$Clients_Staff->id_profile."',
		'".$Clients_Staff->tid."',
		'".$Clients_Staff->numsolicitudes."',
		'".$Clients_Staff->email."',
		'".$Clients_Staff->pass."',
		'".$Clients_Staff->empresa."',
		'".$Clients_Staff->address."',
		'".$Clients_Staff->city."',
		'".$Clients_Staff->state."',
		'".$Clients_Staff->phonenumber."',
		'".date('Y-m-d')."')");
		return $Clients_Staff;
		}

	function GuardarTickets($Tickets){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO tickets (tid,userid,DirDestino,rifempresa,datee,producto,empresa,PesoPaquete,precio,DirActual,idcomprador)
		VALUES(
		'".$Tickets->tid."',
		'".$Tickets->userid."',
		'".$Tickets->DirDestino."',
		'".$Tickets->rifempresa."',
		'".$Tickets->datee."',
		'".$Tickets->producto."',
		'".$Tickets->empresa."',
		'".$Tickets->PesoPaquete."',
		'".$Tickets->precio."',
		'".$Tickets->DirActual."',
		'".$Tickets->idcomprador."')");
		return $Tickets;
		}

	function GuardarTicketsReply($Tickets){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO tickets (tid,userid,rifempresa,empresa,email,date,status)
		VALUES(
		'".$Tickets->tid."',
		'".$Tickets->userid."',
		'".$Tickets->rifempresa."',
		'".$Tickets->empresa."',
		'".$Tickets->email."',
		'".date('Y-m-d H:m:s')."',
		'".$Tickets->status."')");
		return $Tickets;
		}
	function GuardarFactura($Factura){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("INSERT INTO factura (userid,idticket,montocancelar,descripcion,femision,status,fvencimiento,userrif)
		VALUES(
		'".$Factura->userid."',
		'".$Factura->idticket."',
		'".$Factura->montocancelar."',
		'".$Factura->descripcion."',
		'".date('Y-m-d H:m:s')."',
		'".$Factura->status."',
		'".$Factura->fvencimiento."',
		'".$Factura->userrif."')");
		return $Factura;
		}
	
	function DeletClientStaff($ClientStaff){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("DELETE FROM clients_staff WHERE id = '$ClientStaff'");
		return $ClientStaff;
	}
	
	function ModificarClientStaff($ModifClientStaff){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		tid = '".$ModifClientStaff->tid."',
		numsolicitudes = '".$ModifClientStaff->numsolicitudes."',
		pass = '".$ModifClientStaff->pass."',
		empresa = '".$ModifClientStaff->empresa."',
		address = '".$ModifClientStaff->address."',
		city = '".$ModifClientStaff->city."',
		state = '".$ModifClientStaff->state."',
		phonenumber = '".$ModifClientStaff->phonenumber."' WHERE id  = '".$ModifClientStaff->id."'");
		return $ModifClientStaff;
	}
	function ModificarClientStaffStatus($ModifClientStaffStatus){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		status = '".$ModifClientStaffStatus->status."' WHERE id  = '".$ModifClientStaffStatus->id."'");
		return $ModifClientStaffStatus;
	}

	function ModificarnumSolicitud($Modifnum){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		numsolicitudes = '".$Modifnum->numsolicitudes."' WHERE id  = '".$Modifnum->id."'");
		return $Modifnum;
	}

	function ModificarTicketStatus($ModifTicketStatus){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		status = '".$ModifTicketStatus->status."' WHERE tid  = '".$ModifTicketStatus->tid."'");
		return $ModifTicketStatus;
	}
	function ModificarTicketPrecio($ModifTicketPrecio){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		precio = '".$ModifTicketPrecio->precio."' WHERE id  = '".$ModifTicketPrecio->id."'");
		return $ModifTicketPrecio;
	}
		function ModificarTicketDir($ModifTicketDir){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		DirActual = '".$ModifTicketDir->DirActual."' WHERE id  = '".$ModifTicketDir->id."'");
		return $ModifTicketDir;
	}
		function ModificarTicketRuta($ModifTicketRuta){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		ruta = '".$ModifTicketRuta->ruta."' WHERE id  = '".$ModifTicketRuta->id."'");
		return $ModifTicketRuta;
	}
		function ModificarTicketPeso($ModifTicketPeso){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		PesoPaquete = '".$ModifTicketPeso->PesoPaquete."' WHERE id  = '".$ModifTicketPeso->id."'");
		return $ModifTicketPeso;
	}

		function ModificarTicketidf($ModifTicketidf){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE tickets SET
		facturaid = '".$ModifTicketidf->facturaid."' WHERE id  = '".$ModifTicketidf->id."'");
		return $ModifTicketidf;
	}
	function ModificarPass($ModifPass){
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl2("UPDATE clients_staff SET
		pass = '".$ModifPass->pass."' WHERE id  = '".$ModifPass->id."'");
		return $ModifPass;
	}
	function MaxValorClientStaff(){
		$MaxValorClientStaff = new Clients_Staff();
		$Dist1 = new Dist1();
		$row = $Dist1->EjecutarSQl("SELECT MAX(id) as VMayor FROM clients_staff");
		$MaxValorClientStaff->id = $row["VMayor"];
		return $MaxValorClientStaff;
		}
		
	}

?>