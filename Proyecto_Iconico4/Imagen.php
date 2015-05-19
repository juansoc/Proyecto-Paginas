<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CargarImagen</title>
</head>

<?php


  $conexion = mysql_connect('localhost','root');
  mysql_select_db("proyecto_paginas",$conexion);


  $query = "SELECT * FROM proyecto";
  
  $datop = mysql_query($query);
?>




<body>
	<form method="post" action="InsertarImagen.php" enctype="multipart/form-data">

		<label>Nombre:</label>
		<br/>
		<input type="text" name="Nombre"/>
		<br/>


		<label>Elige una imagen:</label>
		<br/>
		<input type="file" name="Ruta_Almacenamiento"/>
		<br/>
		<label>Descripcion</label>
		<br/>
		<textarea cols="10" rows="5" name="Descripcion"></textarea>
		<br/>



		

        <br/><br/><br/><br/>

        
        <label style="text-align:left;">Proyecto</label>
               
        <select name="iProyecto">
        <?php
          while ($record=mysql_fetch_row($datop)) { 
        ?>     
                               
        <option value="<?php  echo " ".$record[0];?>"><?php  echo " ".$record[1];?></option>
    
   
        <?php
        }
        ?>
		<br><br><br><br/>
		<input type="submit" value="Enviar"/>


</select>



		
	</form>

</body>
</html>