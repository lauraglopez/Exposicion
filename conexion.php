<?php 
function DBConn($Server,$DB,$User,$Pass){
	if ($conn = mysql_connect($Server,$User,$Pass)) {
		@mysql_query("SET NAMES 'utf8'");
	if (mysql_select_db($DB, $conn)) {
		echo "Todo OK";
	} else {
		echo "No se encuentra la base de datos";
		die;
	}
}else{
	echo "No esta conectado al servidor";
	die;
}

return $conn;		
}
 ?>
 <?php 
	DBConn("localhost","joyeria","root","");
 ?>