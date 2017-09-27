<?php
if ($_SERVER['HTTP_REFERER'] == ""){ 
header("Location: home.html"); 
exit(); 
}  
?>
<html>
<head>
<title>BICISECURITY</title>
<style type="text/css">
div#message{
text-align:center;
margin-left:auto;
margin-right:auto;
width:40%;
border: solid 2px green
}
</style>
</head>
<body background="fondo2.jpg">
<table align=center>
<tr><td background="cabecera.jpg" WIDTH="700" HEIGHT="70">
<center><FONT FACE="arial black" COLOR=white size=6>Proyecto BICISECURITY</FONT></center>
</td></tr>
</table><br><br>
<table style="position:absolute;top:150px;left:900px;"><tr><td><input type="button" onClick="location.href='acceso.php'" value="Volver"></td></tr></table>
<h1>Registros</h1>
<form method="post" action="imagenes.php">
<table border=1 cellspacing=0 cellpadding=2 bordercolor="666633" bgcolor="white">
<tr>
<td><center>CODIGO</center></td>
<td><center>NOMBRE</center></td>
<td><center>APELLIDO</center></td>
<td><center>CELULAR</center></td>
<td><center>CORREO</center></td>
<td><center>CARRERA</center></td>
</tr>
<?php
$bd=mysql_connect("localhost","root","");
mysql_select_db("bicisecurity",$bd);
$sql="SELECT * FROM clientes";
$resultado=mysql_query($sql,$bd);
$n=mysql_num_rows($resultado);
	for($i=0;$i<$n;$i++){
	echo "<tr>";
	$llave=mysql_result($resultado,$i,0);
	echo "<td style=\"height:10px;width:70px\"><center><input type=\"submit\" name=\"submit\" value=\"$llave\">
		</center></td>";
	echo "<td style=\"height:10px;width:200px\">".mysql_result($resultado,$i,1)."</td>";
	echo "<td style=\"height:10px;width:200px\">".mysql_result($resultado,$i,2)."</td>";
	echo "<td style=\"height:10px;width:100px\"><center>".mysql_result($resultado,$i,3)."</center></td>";
	echo "<td style=\"height:10px;width:150px\">".mysql_result($resultado,$i,4)."</td>";
	echo "<td style=\"height:10px;width:150px\">".mysql_result($resultado,$i,5)."</td>";
	echo "</tr>";
	}
?>
</table>
</form>
<?php
mysql_close($bd);
?>
	


	