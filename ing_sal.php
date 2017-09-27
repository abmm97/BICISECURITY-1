<html>
<body  background="fondo2.jpg">
<center><table style="width:600px;height:300px" border="0">
<tr><td><center><h2>INGRESO Y SALIDA DE BICICLETAS</h2></center></td></tr>
<tr><td><center>
	<table style="background:#CCE7E0;width:500px;height:250px" border="0">
	<form method="post" action="ing_sal.php">
	<tr><td colspan="2" WIDTH="400" HEIGHT="60">Elija una alternativa</td></tr>
	<tr><td colspan="2"><input type="radio" name="opcion" value="ver">Ver Ingresos y Salidad del Alumno</td></tr>
	<tr><td colspan="2"><input type="radio" name="opcion" value="registrar1">Registrar ingreso de la bicicleta</td></tr>
	<tr><td colspan="2"><input type="radio" name="opcion" value="registrar2">Registrar salida de la bicicleta</td></tr>
	<tr>
	<td><center><input type="submit" name="enviar" value="Continuar"></center></td>
	<td><center><input type="button" onClick="location.href='acceso.php'" value="Volver"></center></td>
	</tr>
	</form></table></center></td></tr>
<?php
if(isset($_POST["enviar"])){
	if ($_POST["opcion"]=="ver"){
	echo "<form method='post' action='ing_sal-2.php'>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>Ingrese el codigo del Alumno</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='codigo' size='10'></center></td></tr>
		<tr><td><center><input type='submit' name='submit' value='Ver'></center></td></tr>
		</form>
		</table></center>";
		
	} else if ($_POST["opcion"]=="registrar1"){
		echo "<form method='post' action='ing_sal-1.php'>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>Ingrese el codigo del Alumno</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='codigo' size='10'></center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>fecha de ingreso(formato DD/MM/AAAA)</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='ingreso' size='10'></center></td></tr> 
		<tr><td><center><input type='submit' name='registrar' value='Registrar Ingreso'></center></td></tr>
		</form>
		</table></center>";
	} else if ($_POST["opcion"]=="registrar2"){
		echo "<form method='post' action='ing_sal-1.php'>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>Ingrese el codigo del Alumno</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='codigo' size='10'></center></td></tr>
		<tr><td WIDTH='400' HEIGHT='30' colspan='2'><center>fecha de salida(formato DD/MM/AAAA)</center></td></tr>
		<tr><td colspan='2'><center><input type='text' name='salida' size='10'></center></td></tr> 
		<tr><td><center><input type='submit' name='registrar' value='Registrar Salida'></center></td></tr>
		</form>
		</table></center>";
	}
	
}
?>







