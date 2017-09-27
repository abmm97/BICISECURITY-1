<html>
<body>
<?php
$variable=$_POST["variable"];
$arreglo=explode(" ",$variable);
$codigo=$arreglo[3];
echo "
			<table style=\"position:absolute;top:300px;left:220px\" border='0'>
			<tr>
			<td><img src=\"barcode.php?text=$codigo&size=45&orientation=horizontal&codetype=Code39&print=true&sizefactor=2\"></td>
			</tr>
			<tr>
			
			
			<td><center><form><input type='button' onclick='window.print();' value='Imprimir' /></form></center></td>
			</tr>
			</table>";

?>
</body>
</html>
			