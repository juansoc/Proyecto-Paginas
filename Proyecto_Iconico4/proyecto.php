<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 

    <title>Crear Proyecto</title>
</head>
<?php


  $conexion = mysql_connect('localhost','root');
  mysql_select_db("proyecto_paginas",$conexion);


  $query = "SELECT * FROM tipo_proyecto";
  $quer = "SELECT * FROM usuario";

  $dato = mysql_query($query);
  $valor = mysql_query($quer);
  
?>

<body>
  <div class="container-fluid">
     <div class="row">  
     <label><a href="Consultar.php" class="navbar-link" title ="InsetarDatos"> Consultar datos</a></label>
     <br><br><br><br><br>
    <div class="col-md-1"></div>
  
      <div class="col-md-7">
        
        <div class="col-md-9" > 
          <div class="col-md-3" style="border: 1px solid rgb(255, 255, 255);"><br><br></div>
            
            <br><br><br>

     <form class="form-horizontal" method="POST" role="form" action="ConexionBd.php">
     <div class="form-group">
     <label for="txtNombre" class="col-lg-3 control-label" style="text-align:left;">Nombre</label>
       <div class="col-lg-9">
        <input type="text" class="form-control" id="Nombre" name="txtNombre" placeholder="Introduce tu Nombre">
        </div>
        <br/><br/>

       <label for="txtLugar"class="col-lg-3 control-label" style="text-align:left;">Lugar</label>
       <div class="col-lg-9">
        <input type="text" class="form-control" id="Lugar" name="txtLugar" placeholder="Introduce tu Lugar">
        </div>
        <br/><br/>
        
      <label for="txtFecha"class="col-lg-3 control-label" style="text-align:left;">Fecha</label>
       <div class="col-lg-9">
        <input type="text" class="form-control" id="Fecha" name="txtFecha" placeholder="Introduce Fecha">        
        </div>

       <label for="txtObjetivo"class="col-lg-3 control-label" style="text-align:left;">Objetivo</label>
       <div class="col-lg-9">
        <input type="text" class="form-control" id="Objetivo" name="txtObjetivo" placeholder="Introduce Objetivo">        
        </div>
        

      <label for="txtDuracion"class="col-lg-3 control-label" style="text-align:left;">Duracion</label>
       <div class="col-lg-9">
        <input type="text" class="form-control" id="Duracion" name="txtDuracion" placeholder="Introduce Duracion">        
        </div>



        <br/><br/><br/><br/><br><br>

        <div class="col-lg-3">
        <label style="text-align:left;">Tipo de Proyecto</label>
        </div>
       
        <select name="tipoProyecto">
        <?php
          while ($record=mysql_fetch_row($dato)) { 
        ?>     
                               
        <option value="<?php  echo " ".$record[0];?>"><?php  echo " ".$record[1];?></option>
    
   
        <?php
        }
        ?>

</select>

<br><br><br>

<div class="col-lg-3">
<label style="text-align:left;">Usuario</label>
</div>
        <select name="usuario">
       
<?php
  while ($record=mysql_fetch_row($valor)) { 
?>     
                                
  
   <option value="<?php  echo " ".$record[0];?>"><?php  echo " ".$record[1];?></option>
    
   
<?php

  }

?>

</select>

<input type="submit" id="btnGuardar" value="Guardar" class="btn btn-default">
   
    </div>   
    </form>
            </div>
      
          </div>
    
    
    </div>
    </div>

</body>
</html>