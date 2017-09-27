<?php
if($_POST['registrar']=="Registrar Ingreso"){
	$codigo=$_POST["codigo"];
	$fecha=$_POST["ingreso"];

 $mysqli= new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="UPDATE ing_sal SET INGRESO='$fecha' WHERE CODIGO='$codigo'";
	if ($mysqli->query($sql) === true ) {
	echo "<html>
			<body  background='fondo2.jpg'>
			<table style=\"position:absolute;top:300px;left:500px;\">
			<tr>
			<td><FONT FACE=\"arial\" COLOR='white' size=5>La fecha de ingreso fue añadida con exito</FONT></td>
			</tr>
			<tr>
			<td><center><input type='button' onClick=\"location.href='acceso.php'\" value=\"Volver\"></center></td>
			</tr>
			</table></body></html>";	
	} else {
	echo "ERROR: No fue posible ejecutar la consulta: $sql " .
	$mysqli->error;
	}
	$mysqli->close();

} else if ($_POST['registrar']=="Registrar Salida"){
	$codigo=$_POST["codigo"];
	$fecha=$_POST["salida"];

 $mysqli= new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="UPDATE ing_sal SET SALIDA='$fecha' WHERE CODIGO='$codigo'";
	if ($mysqli->query($sql) === true ) {
	echo "<html>
			<body  background='fondo2.jpg'>
			<table style=\"position:absolute;top:300px;left:500px;\">
			<tr>
			<td><FONT FACE=\"arial\" COLOR='white' size=5>La fecha de ingreso fue añadida con exito</FONT></td>
			</tr>
			<tr>
			<td><center><input type='button' onClick=\"location.href='acceso.php'\" value=\"Volver\"></center></td>
			</tr>
			</table></body></html>";	
	} else {
	echo "ERROR: No fue posible ejecutar la consulta: $sql " .
	$mysqli->error;
	}
	$mysqli->close();
	
}


?>