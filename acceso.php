<?php
if ($_SERVER['HTTP_REFERER'] == ""){ 
header("Location: home.html"); 
exit(); 
}  
?>
<html>
<head>

<style type="text/css">
  .boton{
        font-size:10px;
        font-family:Verdana;
        font-weight:bold;
        color:white;
        background:#638cb5;
        border:0px;
        width:130px;
        height:40px;
       }
</style>

</head>
<body background="fondo2.jpg">
<?php
if(isset($_POST["submit"])){
$codigo=$_POST["codigo"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$celular=$_POST["celular"];
$correo=$_POST["correo"];
$carrera=$_POST["carrera"];
if($codigo==null or $nombre==null or $apellido==null or $celular==null or $correo==null or $carrera==null){
	echo "<table style=\"position:absolute;top:560px;left:700px;\"><tr><td><FONT FACE=\"arial\" COLOR=white size=4>No se realizo el registro, falta algun campo</FONT></td></tr>
			</table>";	
} else {
$nombre_img= $_FILES['rostro']['name'];
$tipo = $_FILES['rostro']['type'];
$tamano = $_FILES['rostro']['size'];
 //Si existe imagen y tiene un tamaño correcto
if (($nombre_img == !NULL) and ($tamano<= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($tipo == "image/gif")
   || ($tipo == "image/jpeg")
   || ($tipo == "image/jpg")
   || ($tipo == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio = $_SERVER['DOCUMENT_ROOT'].'/BICISECURITY/imagenes/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['rostro']['tmp_name'],$directorio.$nombre_img);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
 }
 
$nombre_img1= $_FILES['bicicleta']['name'];
$tipo1 = $_FILES['bicicleta']['type'];
$tamano1 = $_FILES['bicicleta']['size'];
 //Si existe imagen y tiene un tamaño correcto
if (($nombre_img1 == !NULL) and ($tamano1<= 200000)) 
{
   //indicamos los formatos que permitimos subir a nuestro servidor
   if (($tipo1 == "image/gif")
   || ($tipo1 == "image/jpeg")
   || ($tipo1 == "image/jpg")
   || ($tipo1 == "image/png"))
   {
      // Ruta donde se guardarán las imágenes que subamos
      $directorio1 = $_SERVER['DOCUMENT_ROOT'].'/BICISECURITY/imagenes/';
      // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
      move_uploaded_file($_FILES['bicicleta']['tmp_name'],$directorio1.$nombre_img1);
    } 
    else 
    {
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
    }
} 
else 
{
   //si existe la variable pero se pasa del tamaño permitido
   if($nombre_img1 == !NULL) echo "La imagen es demasiado grande "; 
 }
 

	$mysqli= new mysqli("localhost","root","","bicisecurity");
	if($mysqli===false){
		die ("ERROR: No se establecio la conexion. ".mysqli_connect_error());	
	}
	$sql="INSERT INTO clientes VALUES ('$codigo','$nombre','$apellido','$celular','$correo','$carrera')";
	$sql2="INSERT INTO imagenes VALUES ('$codigo','$nombre_img','$nombre_img1')";
	$sql3="INSERT INTO ing_sal (CODIGO) VALUES ('$codigo')";
	if ($mysqli->query($sql) === true and $mysqli->query($sql2) === true and $mysqli->query($sql3) === true ) {
	echo "<table style=\"position:absolute;top:560px;left:700px;\"><tr><td><FONT FACE=\"arial\" COLOR=white size=4>El registro fue añadido con exito</FONT></td></tr>
			</table>";	
	} else {
	echo "ERROR: No fue posible ejecutar la consulta: $sql. $sql2 " .
	$mysqli->error;
	}
	$mysqli->close();
}
	
}
?>
<table align=center>
<tr><td background="cabecera.jpg" WIDTH="700" HEIGHT="70">
<center><FONT FACE="arial black" COLOR=white size=6>Proyecto BICISECURITY</FONT></center>
</td></tr>
</table>
<table align=center style="position:absolute;top:140px;left:100px;">
<tr><td WIDTH="200" HEIGHT="30"><input type="button" value="Alumnos" class="boton" OnClick="location.href='clientes.php'"></td>
	<td WIDTH="200" HEIGHT="30"><input type="button" value="Buscar" class="boton" OnClick="location.href='buscar.php'"></td>
	<td WIDTH="150" HEIGHT="30"><input type="button" value="Actualizar datos" class="boton" OnClick="location.href='actualizar2.php'"></td>
	</tr>
</table>
<table align=center style="position:absolute;top:210px;left:100px;">
<tr><td WIDTH="200" HEIGHT="30"><input type="button" value="Ingresos y Salidas" class="boton" OnClick="location.href='ing_sal.php'"></td>
	<td WIDTH="200" HEIGHT="30"></td>
	<td WIDTH="150" HEIGHT="30"><input type="button" value="Eliminar registros" class="boton" OnClick="location.href='eliminar.php'"></td>
</tr>
</table>
<table border="0" style="position:absolute;top:130px;left:700px;">
<tr><td align=center>
<h3>Nuevo Registro</h3>
<form method="POST" action="acceso.php" enctype="multipart/form-data">
<table border="0" width="400" align=center>
<tr><td>Codigo de Estudiante:</td></tr>
<tr><td><input type="text" name="codigo" size="20"></td></tr>
<tr><td>Nombre:</td></tr>
<tr><td><input type="text" name="nombre" size="40"></td></tr>
<tr><td>Apellido:</td></tr>
<tr><td><input type="text" name="apellido" size="40"></td></tr>
<tr><td>Celular de contacto:</td></tr>
<tr><td><input type="text" name="celular" size="20"></td></tr>
<tr><td>Correo:</td></tr>
<tr><td><input type="text" name="correo" size="20"></td></tr>
<tr><td>Carrera:</td></tr>
<tr><td><input type="text" name="carrera" size="20"></td></tr></table>
<table style="position:absolute;top:230px;left:240px;" >
<tr><td>Imagen del dueño: 
<input type="file" name="rostro">
</td></tr>
<tr><td> Imagen de la bicicleta: <input type="file" name="bicicleta"></td></tr></table>
<table style="position:absolute;top:350px;left:200px;">
<tr><td align=center><input type="submit" name="submit" value="Registrar" size="6"></td></tr>
</table>

<table style="position:absolute;top:400px;left:100px;">
<tr><td align=center><input type='button' onclick='location.href="home.html"' name='Volver' value='Salir'></td></tr>
</table>

<table style="position:absolute;top:400px;left:300px;">
<tr><td align=center><input type="reset" value="Limpiar"></td></tr>
</table>


</form>
</body>
</html>