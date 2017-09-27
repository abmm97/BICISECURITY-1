<html>
<head><title></title></head>
<body background="ficha.jpg">
<?php
	$codigo=$_POST["submit"];
	$mysqli=new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="SELECT ROSTRO FROM imagenes WHERE codigo='$codigo'";
	$sql2="SELECT BICICLETA FROM imagenes WHERE codigo='$codigo'";
	$sql3="SELECT * FROM clientes WHERE codigo='$codigo'";
	$sql4="SELECT CODIGO FROM clientes WHERE codigo='$codigo'";
	$resultado1=$mysqli->query($sql);
	$resultado2=$mysqli->query($sql2);
	$resultado3=$mysqli->query($sql3);
	$resultado4=$mysqli->query($sql4);
	$fila=$resultado1->fetch_array();
	$fila2=$resultado2->fetch_array();
	$fila3=$resultado3->fetch_array();
	$fila4=$resultado4->fetch_array();
	$resultado1->close();
	$resultado2->close();
	$resultado3->close();
	$resultado4->close();
	$mysqli->error;
	$mysqli->close();
?>

<table style="position:absolute;top:10px;left:350px;"><tr><td><center><h1>Ficha de datos</h1></center></td></tr></table>

<table border="0" style="position:absolute;top:100px;left:150px;">
<tr><td><u>CODIGO:</u></td></tr>
<tr><td style="width:350px ; height:30px;"><h4><?php echo $fila3[0]; ?></h4></td></tr>
<tr><td><u>NOMBRES:</u></td></tr>
<tr><td style="width:350px ; height:30px;"><h4><?php echo $fila3[1]; ?></h4></td></tr>
<tr><td><u>APELLIDOS:</u></td></tr>
<tr><td style="width:350px ; height:30px;"><h4><?php echo $fila3[2]; ?></h4></td></tr>
<tr><td><u>CELULAR:</u></td></tr>
<tr><td style="width:350px ; height:30px;"><h4><?php echo $fila3[3]; ?></h4></td></tr>
<tr><td><u>CORREO:</u></td></tr>
<tr><td style="width:350px ; height:30px;"><h4><?php echo $fila3[4]; ?></h4></td></tr>
</table>

<table style="position:absolute;top:100px;left:470px;">
<tr><td><img src="imagenes/<?php echo $fila[0]; ?>" alt="" width="250" height="280" /></td></tr>

</table>
<table  style="position:absolute;top:440px;left:220px;">
<tr><td><img src="imagenes/<?php echo $fila2[0]; ?>" alt="" width="400" height="200" /></td></tr>
</table>

<table  style="position:absolute;top:440px;left:630px;">
<tr><td><img src="barcode.php?text=<?php echo $fila4[0]; ?>&size=40&orientation=vertical&codetype=Code39&print=false&sizefactor=1.3"></td></tr>
</table>
<table style="position:absolute;top:670px;left:200px;">
<tr><form method="post" action="codigo.php">
	<td width="300" height="60"><center><input type="submit" name="variable" value="Generar sticker para <?php echo $fila4[0]; ?>"></center></td></form>
	<td width="300" height="60"><center><input type="button" name="ing_sal" value="Anotar ingreso o salida" onclick="location.href='ing_sal.php'"></center></td>

	</table>
	

</body>
</html>