<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<title>Consulta</title>
</head>


<?php


	$conexion = mysql_connect('localhost','root');

	mysql_select_db("proyecto_paginas",$conexion);


	$query = "SELECT P.Nombre, P.Lugar, P.Fecha, T.Nombre_Area, U.Nombre FROM proyecto P
				INNER JOIN tipo_proyecto T ON P.Tipo_Proyecto_Id = T.Id 
				INNER JOIN usuario U ON P.Usuario_Id = U.Id;";
   	$dato = mysql_query($query);
	
	

?>

<body>
	<div class="container-fluid">		
		<div class="row">
		<label><a href="proyecto.php" class="navbar-link" title ="InsetarDatos"> Insertar datos</a></label>
		<br><br><br><br><br>
		<div class="col-md-1"></div>
		

        <div class="col-md-7" >
			<div class="col-md-2" style="border: 1px solid rgb(255, 255, 255);"><br><br></div>
			 	<br><br>
			 	<div class="col-md-7" >	
			 			
	    <table border="3" class="table table-striped">
          <thead >
	       <th class="success">Nombre</th>
	       <th class="success">Lugar</th>
	       <th class="success">Fecha</th>
	       <th class="success">Area</th>
	       <th class="success">Usuario</th>
	      </thead>
	
<?php
	while ($record=mysql_fetch_row($dato)) { 
?>	   
<tr>                                 
	<td><?php  echo " ".$record[0];?> </td>  
	<td><?php  echo " ".$record[1];?> </td>
	<td><?php  echo " ".$record[2];?> </td>
	<td><?php  echo " ".$record[3];?> </td>		
	<td><?php  echo " ".$record[4];?> </td>
	
</tr>
	
<?php
	}

?>



</table>




						<br><br><br><br><br>
               </div>
			
          </div>
	

</div>
</div>
		
</body>
</html>