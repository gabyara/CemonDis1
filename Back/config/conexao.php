<?php 
class Dist1{
	public function EjecutarSQl($pSQL){
		$hostname = "localhost";
		$database = "distribuidor1_hermes";
		$username = "root";
		$password = "";
		$capasiet = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
		mysql_select_db($database, $capasiet);
		$Log = mysql_query($pSQL, $capasiet) or die(mysql_error());
		$row_q = mysql_fetch_assoc($Log);		
		return $row_q;
	}
	
	public function EjecutarSQl2($pSQL){
		$hostname = "localhost";
		$database = "distribuidor1_hermes";
		$username = "root";
		$password = "";
		$capasiet = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
		mysql_select_db($database, $capasiet);
		/* $Log = mysql_query($pSQL, $game_bb) or die(mysql_error());
		$row_q = mysql_fetch_assoc($Log); */
		$row_q = mysql_query($pSQL, $capasiet) or die(mysql_error());
		return $row_q;
	} 
}

?>