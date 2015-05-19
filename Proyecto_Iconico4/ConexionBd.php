
<?php

	$vNombre = $_POST['txtNombre'];
	$vLugar = $_POST['txtLugar'];
	$vFecha =$_POST['txtFecha'];
	$vObjetivo =$_POST['txtObjetivo'];
	$vDuracion =$_POST['txtDuracion'];
	$vUsuario =$_POST["usuario"];
	$vtipoProyecto =$_POST["tipoProyecto"];
	
	$conexion = mysql_connect('localhost','root');

	if (mysql_select_db("proyecto_paginas",$conexion))
	{
		echo "conexio exitosa";
	}
	else
	{
		echo "Conexion erronea";
	}
	
   
	$query = "INSERT INTO proyecto (Nombre,Lugar,Fecha,Objetivo,Duracion,Usuario_Id,Tipo_Proyecto_Id) VALUES ('$vNombre','$vLugar','$vFecha','$vObjetivo','$vDuracion',$vUsuario,$vtipoProyecto)";

	echo $query;

	if (mysql_query($query))
	{	
		echo "Insercion correcta";
	?> 
	<?php
header('location: proyecto.php');
?>
	<?php 
	}
	else
     {
		echo "Error al insertar";
     }

?>
