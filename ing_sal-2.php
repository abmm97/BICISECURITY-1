<html>
<body  background='fondo2.jpg'>
<table style="position:absolute;top:300px;left:500px;"  border=1 cellspacing=0 cellpadding=2 bordercolor="666633" bgcolor="white">
<tr>
<td><center>INGRESO</center></td>
<td><center>SALIDA</center></td>
</tr>
			
			
<?php
			$codigo=$_POST["codigo"];
			$mysqli= new mysqli("localhost","root","","bicisecurity");
			if($mysqli===false){
			die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
			}
			$sql="SELECT INGRESO,SALIDA FROM ing_sal WHERE CODIGO='$codigo'";
			$resultado=$mysqli->query($sql);
			
			if ($resultado->num_rows > 0) {
			while($fila = $resultado->fetch_array()) {
				echo "<tr>";
				echo "<td style=\"height:10px;width:200px\">".$fila[0]."</td>";
				echo "<td style=\"height:10px;width:200px\">".$fila[1]."</td>";
				echo "</tr>";
				}
			echo "<tr><td colspan='2'>ULTIMOS INGRESO Y SALIDA DEL CODIGO $codigo</td></tr></form></table>";
			}
			$mysqli->close();

?>
</body>
</html>