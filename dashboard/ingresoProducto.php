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
   
    
    <title>Pool Store - Admin - Ingresar Productos</title>

    
   
 </head>

<body>
 <!--SECCION MENU -->
 <?php
  include "includesAdmin/menuAdmin.inc"
 ?>
  <div class="container" style="padding-top: 100px">
  <form class="form-horizontal" id="ingresoAdminForm" action="procesoIngresoProd.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Nombre </label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="prodNombre" name="nombreProd" placeholder="Nombre del Producto"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Descripción</label>
         <div class="col-sm-10">
           <textarea id="prodDesc" name="descProd" rows="5" cols="100" placeholder="Descripción del Producto"></textarea> 
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Categoría</label>
         <div class="col-sm-10">
           <select class="form-control" id="prodCateg" name="categProd" title="Elegir Categoría"/>
                 <option value="0">--- Seleccione Categoría ---</option>
                 <option value="1">Productos Químicos</option>
                 <option value="2">Cloradores Salinos</option>
                 <option value="3">Iluminación</option>
                 <option value="4">Accesorios</option>
                 <option value="5">Equipamiento</option>
                 <option value="6">Calefacción</option>

           </select>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Precio u$s</label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="prodPrecio" name="precioProd"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputFile2" class="col-sm-2 control-label">*Imágen</label>
         <div class="col-sm-6">
          <input type="file" accept="image/*" id="prodImagen" name="imagenProd"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputFile2" class="col-sm-2 control-label">*Oferta</label>
          <div class="col-sm-6">
          <label class="radio-inline">
           <input type="radio" name="prodOferta" id="ofertaProdNo" value="2" checked="checked"> Normal
          </label>
          <label class="radio-inline">
           <input type="radio" name="prodOferta" id="ofertaProdSi" value="1"> Oferta
          </label>
         </div>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="CheckFormIngresoProd();">Ingresar Producto</button>
       </form>  
      </div> 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="jsAdmin/controlAdmin.js"></script>	
</body>
</html>