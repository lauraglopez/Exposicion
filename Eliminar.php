<?php 
// conectamoa a MYSQL
$link=mysql_connect("localhost","root","");
if(!$link){
echo "Error al abrir la base de datos"." Vuelva a intentar";
exit();
}
mysql_select_db("joyeria", $link); //conexion con la bd
$Id=$_POST['Idj'];
$result = mysql_query("SELECT * FROM joyas WHERE Idjoyas=$Id",
$link); //acceso a la tabla joyas
if($row=mysql_fetch_array($result)){
echo "<center>";
echo "<table border=1>";
echo "<tr align=center>";
echo "<td><b>IDProducto</b></td>"; 
echo "<td><b>Descripci&oacute;n</b></td>";
echo "<td><b>Precio</b></td>";
echo "<td><b>Cantidad</b></td>";
echo "</tr>";
echo "<tr align=center>";
echo "<td>"."<i>".$row["Idjoyas"]."</i>"."</td>";
echo "<td>"."<i>".$row["Tipo"]."</i>"."</td>";
echo "<td>"."<i>".$row["Descripcion"]."</i>"."</td>";
echo "<td>"."<i>".$row["Precio"]."</i>"."</td>";
echo "<td>"."<i>".$row["Cantidad"]."</i>"."</td>";
echo "</tr>";
echo "</table>";
echo "</center>"."<p>";
mysql_query("DELETE FROM joyas WHERE Idjoyas=$Id", $link);
echo "<center>"."¡ Producto vendido, Gracias por la compra !"."</center>";
}
else{
echo "<center>"."Producto ".$Id." ¡No existe!"."</center>";
}
mysql_close($link);
?>