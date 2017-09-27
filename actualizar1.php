<html>
<body  background="fondo2.jpg">
<center><table style="width:600px;height:300px" border="0">
<tr><td><center><h2>ACTUALIZACION DE DATOS</h2></center></td></tr>
<tr><td><center>
	<table style="background:#B3B6B7;width:500px;height:250px" border="0">
	<form method="post" action="actualizar1.php">
	<tr><td WIDTH="400" HEIGHT="30" colspan="2">Ingrese el codigo del Alumno a modificar</td></tr>
	<tr><td colspan="2"><input type="text" name="codigo" size="8"></td></tr>
	<tr><td colspan="2" WIDTH="400" HEIGHT="30">Seleccione el atributo a reemplazar;</td></tr>
	<tr><td colspan="2"><select name="atributo">
			<option value="CODIGO" selected>CODIGO</option>
			<option value="NOMBRE">NOMBRE</option>
			<option value="APELLIDO">APELLIDO</option>
			<option value="CELULAR">CELULAR</option>
			<option value="CORREO">CORREO</option>
			<option value="CARRERA">CARRERA</option>
			</select>
		</td></tr>
	<tr><td colspan="2" WIDTH="400" HEIGHT="30">Indique el nuevo valor que desea reemplazar:</td></tr>
	<tr><td colspan="2" WIDTH="400" HEIGHT="30"><input type="text" name="nuevo" size="20"></td></tr>
	
	<tr><td><center><input type="submit" name="submit" value="Actualizar"></center></td><td><center><input type="button" onClick="location.href='acceso.php'" value="Volver"></center></td></tr>
	</form>
	</table></center>
</td></tr>
<?php
if(isset($_POST["submit"])){
	$codigo=$_POST["codigo"];
	$atributo=$_POST["atributo"];
	$nuevo=$_POST["nuevo"];

	
	$mysqli=new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="UPDATE clientes SET $atributo='$nuevo' WHERE CODIGO='$codigo'";
	$resultado=$mysqli->query($sql);
	echo"<tr><td><center>ACTUALIZACION EXITOSA</center></td></tr></table></center>";
}

?>

</body>
</html>
