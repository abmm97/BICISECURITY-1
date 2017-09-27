<html>
<body  background="fondo2.jpg">
<?php
if(!isset($_POST["submit"])){
?>
<form method="post" action="actualizar2.php">
<center><table style="background:#C3F1E6;width:600px;height:200px">
<tr><td colspan="2" width="60px" height="60px"><center><h2>ACTUALIZACION DE DATOS</h2></center></td></tr>
<tr><td colspan="2">¿Que es lo que desea actualizar?:</td></tr>
<tr><td colspan="2"><input type="radio" name="opcion" value="datos">Informacion del alumano</td></tr>
<tr><td colspan="2"><input type="radio" name="opcion" value="fotos">fotos del alumno</td></tr>
<tr><td><center><input type="submit" name="submit" value="Actualizar"></center></td><td><center><input type="button" onClick="location.href='acceso.php'" value="Volver"></center></td></tr>
</table></center></form>
<?php 
} else {
	if($_POST["opcion"]=="datos"){
	header("Location: actualizar1.php");
	}else if ($_POST["opcion"]=="fotos"){
	header("Location: actualizar3.php");
	}
	}
?>
</body>
</html>