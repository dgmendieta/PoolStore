<?php
 include "includesAdmin/conexionAdmin.inc"
?>



<!DOCTYPE HTML>
<html>
 <head>
	  <meta http-equiv="content-type" content="text/html" />
      <meta name="fSPDiseño" content="Todo para piscinas" />
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link href="../css/bootstrap.css" rel="stylesheet"/>
      <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
 <style type="text/css">
   body {
    padding-top: 70px;
    background-color: #E5E5E5;
   }
  
   </style>
   
    
    <title>Pool Store - Admin - Modificar Productos</title>

    
   
 </head>

<body>
 <!--SECCION MENU -->
 <?php
  include "includesAdmin/menuAdmin.inc"
 ?>
  <div class="container" style="padding-top: 100px">
  <form class="form-horizontal" id="idAdminForm" action="modificaProducto.php" method="POST">
        <div class="form-group">
          <label for="inputEmail1" class="col-sm-2 control-label">*Id </label>
         <div class="col-sm-2">
          <input type="text" class="form-control" id="prodId" name="idProd"/>
         </div>
        </div>
        
        
        <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <span id="errormensajeingreso" style="color: red;"></span>
           <h6 style="color: blue;">* Campos Requeridos </h6>
         </div>
        </div>
       </div>

      
       <div class="modal-footer">
        <a href="listadoProductosAdmin.php"><button type="button" class="btn btn-default">Cancelar</button></a>
        <button type="button" class="btn btn-primary" onclick="CheckFormIdProd();">Ver Producto</button>
       </form>  
      </div> 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="jsAdmin/controlAdmin.js"></script>	
</body>
</html>