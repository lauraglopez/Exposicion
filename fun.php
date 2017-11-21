<?php 
  $link=mysql_connect("localhost","root","");
mysql_select_db("joyeria",$link); //Se conecta con la BD
$Tipo=$_POST['tipo'];
$result=mysql_query("SELECT sum(Precio) as Total FROM joyas where Tipo like '$Tipo'",$link);

	if ($row=mysql_fetch_array($result)) {

		echo "<TABLE BORDER=1";
		echo "<TR>";
		echo "<TD>TOTAL INVERTIDO</TD>
		</TR>";
		do
		{
			echo "<TD>"."$".$row['Total'];
			echo "<TR>";
		} while ($row=mysql_fetch_array($result));
		echo "</TABLE>";
	}
	else
	{
		echo "¡No existen productos almacenados";
	} 
	


	 ?>

