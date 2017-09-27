<html>
<body  background="fondo2.jpg">
<center><table style="width:600px;height:300px" border="0">
<tr><td><center><h2>ACTUALIZACION DE DATOS</h2></center></td></tr>
<tr><td><center>
	<table style="background:#B3B6B7;width:500px;height:250px" border="0">
	<form method="post" action="actualizar3.php">
	<tr><td colspan="2" WIDTH="400" HEIGHT="60">Para actualizar foto elija una alternativa</td></tr>
	<tr><td colspan="2"><input type="radio" name="foto" value="cara">Foto de rostro</td></tr>
	<tr><td colspan="2"><input type="radio" name="foto" value="bicicleta">Foto de bicicleta</td></tr>
	<tr><td colspan="2"><input type="radio" name="foto" value="ambas">Ambas fotos</td></tr>
	
	<tr><td><center><input type="submit" name="enviar" value="Continuar"></center></td><td><center><input type="button" onClick="location.href='acceso.php'" value="Volver"></center></td></tr>
	</form></table></center></td></tr>
<?php
if(isset($_POST["enviar"])){
	if ($_POST["foto"]=="cara"){
	echo "<form method='post' action='actualizar3-1.php' enctype='multipart/form-data'>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>Ingrese el codigo del Alumno</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='codigo' size='10'></center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center>Ingrese la imagen del rostro</center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center><input type='file' name='rostro'></center></td></tr>
		<tr><td><center><input type='submit' name='actualizar' value='actualizar'></center></td></tr>
		</form>
		</table></center>";
	} else if ($_POST["foto"]=="bicicleta"){
		echo "<form method='post' action='actualizar3-2.php' enctype='multipart/form-data'>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>Ingrese el codigo del Alumno</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='codigo' size='10'></center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center>Ingrese la imagen de la bicicleta</center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center><input type='file' name='bicicleta'></center></td></tr>
		<tr><td><center><input type='submit' name='actualizar' value='actualizar'></center></td></tr>
		</form>
		</table></center>";
	}  else if ($_POST["foto"]=="ambas"){
		echo "<form method='post' action='actualizar3-3.php' enctype='multipart/form-data'>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>Ingrese el codigo del Alumno</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='codigo' size='10'></center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center>Ingrese la imagen del rostro</center></td></tr>
		<tr><td><center><input type='file' name='rostro'></center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center>Ingrese la imagen de la bicicleta</center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30'><center><input type='file' name='bicicleta'></center></td></tr>
		<tr><td><center><input type='submit' name='actualizar' value='actualizar'></center></td></tr>
		</form>
		</table></center>";
		
	}
	
}
?>
