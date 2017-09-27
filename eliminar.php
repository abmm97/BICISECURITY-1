<html>
<body  background="fondo2.jpg">
<center><table style="background:green;width:600px;height:200px" border="0">
<tr><td><center><h2>ELIMINAR REGISTROS</h2></center></td></tr>
<tr><td><center>
	<table style="background:green;width:500px;height:150px" border="0">
	<form method="post" action="eliminar.php">
	<tr colspan="2"><td>Ingrese el codigo del Alumno</td></tr>
	<tr colspan="2"><td><input type="text" name="codigo" size="8"></td></tr>
	<tr><td><input type="submit" name="submit" value="Eliminar"></td>
	<td><input type="button" onClick="location.href='acceso.php'" value="Volver"></td></tr>
	</form>
	</table></center>
</td></tr>
<?php
if(isset($_POST["submit"])){
	$codigo=$_POST["codigo"];
	$mysqli=new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="DELETE FROM clientes WHERE CODIGO='$codigo'";
	$resultado=$mysqli->query($sql);
	echo"<tr><td><center>El registro ha sido eliminado</center></td></tr></table></center>";
}

?>
</body>
</html>
