<?php
if ($_SERVER['HTTP_REFERER'] == ""){ 
header("Location: home.html"); 
exit(); 
}  
?>
<html>
<body  background="fondo2.jpg">
<center><table style="background:teal;width:600px;height:300px" border="0">
<tr><td><center><h2>BUSQUEDA DE DATOS</h2></center></td></tr>
<tr><td><center>
	<table style="background:teal;width:500px;height:250px">
	<form method="post" action="buscar.php">
	<tr colspan="2"><td>Realizar la busqueda por:</td></tr>
	<tr colspan="2"><td><select name="atributo">
			<option value="CODIGO">CODIGO</option>
			<option value="NOMBRE">NOMBRE</option>
			<option value="APELLIDO">APELLIDO</option>
			<option value="CELULAR">CELULAR</option>
			<option value="CORREO">CORREO</option>
			<option value="CARRERA">CARRERA</option>
			</select>
	</td></tr>
	<tr colspan="2"><td><input type="text" name="dato1" size="25"></td></tr>
	<tr><td><input type="submit" name="submit" value="Buscar"></td><td><input type="button" onClick="location.href='acceso.php'" value="Volver"></td></tr>
	</form>
	</table></center>
	</td></tr></table></center><p />
<?php
if(isset($_POST["submit"])){
	
	echo "  <form method='post' action='imagenes.php'><table border=1 cellspacing=0 cellpadding=2 bordercolor='666633' bgcolor='white'>
			<tr>
			<td><center>CODIGO</center></td>
			<td><center>NOMBRE</center></td>
			<td><center>APELLIDO</center></td>
			<td><center>CELULAR</center></td>
			<td><center>CORREO</center></td>
			<td><center>CARRERA</center></td>
			</tr>";
	
	
	$dato1=$_POST['dato1'];
	$atributo=$_POST["atributo"];
	
	$mysqli=new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="SELECT * FROM clientes WHERE $atributo='$dato1'";
	$resultado=$mysqli->query($sql);
	
	if ($resultado->num_rows > 0) {
	while($fila = $resultado->fetch_array()) {
	echo "<tr>";
	$llave=$fila[0];
	echo "<td style=\"height:10px;width:70px\"><center><input type=\"submit\" name=\"submit\" value=\"$llave\">
		</center></td>";
	echo "<td style=\"height:10px;width:200px\">".$fila[1]."</td>";
	echo "<td style=\"height:10px;width:200px\">".$fila[2]."</td>";
	echo "<td style=\"height:10px;width:100px\"><center>".$fila[3]."</center></td>";
	echo "<td style=\"height:10px;width:150px\">".$fila[4]."</td>";
	echo "<td style=\"height:10px;width:150px\">".$fila[5]."</td>";
	echo "</tr>";
	}
	echo "</form></table>";
	}
	$mysqli->close();
	
	
}
?>



</body>
</html>
