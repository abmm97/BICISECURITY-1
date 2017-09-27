<html>
<head>
<title>BICISECURITY</title>
</head>
<body background="fondo1.jpg">
<?php
if(isset($_POST["enviar"])){
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$mensaje=$_POST["mensaje"];
	$para = 'yovanaflores283@hotmail.com';
	$asunto = 'el asunto';
	$cabeceras = 'From: '.$correo . "\r\n" .
	"Reply-To: webmaster@example.com" . "\r\n" .
	"X-Mailer: PHP/" . phpversion();

mail($para, $asunto, $mensaje, "From: $correo");}

?>

<table align=center>
<tr><td background="cabecera.jpg" WIDTH="700" HEIGHT="70">
<center><FONT FACE="arial black" COLOR=white size=6>Proyecto BICISECURITY</FONT></center>
</td></tr>
</table><br><br>
<font face="arial black" size="5">Para cualquier consulta o error, no dude en contactarse con nosotros:</font><p />
<form method='POST' action="contactenos.php">
<font size="5">Nombres y Apellidos:</font><br>
<input type='text' size='40' name="nombre"><br>
<font size="5">Correo:</font><br>
<input type="text" size="40" name="correo"><p />
<font size="5">Mensaje:</font><p />
<textarea cols="50" rows="10" WRAP="physical" name="mensaje" >
</textarea><p />
<input type="submit" name="enviar" value="enviar">
</form>
</body>
</html>