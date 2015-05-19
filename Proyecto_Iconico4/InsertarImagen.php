<?php

$conexion = mysql_connect('localhost','root');
mysql_select_db("proyecto_paginas",$conexion);

$ruta="Imagenes";
$archivo=$_FILES['Ruta_Almacenamiento']['tmp_name'];
$nombreArchivo=$_FILES['Ruta_Almacenamiento']['name'];
move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
$ruta=$ruta."/".$nombreArchivo;
$texto=$_POST['Descripcion'];
$vNombrep=$_POST['Nombre'];
$viProyecto=$_POST['iProyecto'];


$insertar=mysql_query("insert into imagenes (Nombre,Descripcion,Ruta_Almacenamiento,Proyecto_Id) values ('$vNombrep','$texto','$ruta','$viProyecto')");

if($insertar)
{
	echo "insercion exitosa";
	echo "<a href='verimagenes.php'>Ver mis imagenes</a>";
}
else
{
	echo "fallo";
	}

?>