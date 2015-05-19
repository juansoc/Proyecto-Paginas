<?php

$conexion = mysql_connect('localhost','root');
mysql_select_db("proyecto_paginas",$conexion);


$consulta=mysql_query("select * from imagenes");



echo "<table>
		<tr>
			<th>Imagen</th>
			<th>Descripcion</th>
		</<tr>
";


while ($imagenes=mysql_fetch_array($consulta)) 
{
	$imagen=$imagenes['Ruta_Almacenamiento'];
	$texto=$imagenes['Descripcion'];
	echo "<tr>
			<td><img src='$imagen' width='100ptx' height='100ptx'></td>
			<td>$texto</td>
		</tr>";
}

echo "</table>";



?>