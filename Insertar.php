<?php
$link=mysql_connect("localhost","root","");
$tipo=$_POST['tipo'];
$des=$_POST['des'];
$pre=$_POST['precio'];
$cant=$_POST['cantidad'];
if (!$link) {
	echo "Error al abri la base de datos";
}
mysql_select_db("joyeria",$link);
//*******************INSERTANDO REGISTROS***********************
$meter="insert into joyas(Tipo,Descripcion,Precio,Cantidad) values ('$tipo','$des','$pre','$cant')";
$result=mysql_query($meter,$link);
mysql_close($link);

  ?>