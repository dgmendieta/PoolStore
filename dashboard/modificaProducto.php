<?php
 include "includesAdmin/conexionAdmin.inc"
?>
<?php
  if (isset($_GET[id])) {
    $id = $_GET[id];
  } else {
    $id = $_POST[idProd];
  }
   
   $idProd = 0;    

    $sql = "SELECT * FROM productos WHERE idProducto=$id;";
   
    
    
    $datos = mysqli_query ($conectarAdmin,$sql);
   if (mysqli_num_rows($datos)==0) {
                header("refresh:3;url=idmodificaProducto.php");
                echo "No existe producto...";
  } else {
     $producto = mysqli_fetch_array($datos); 
     
  }
                 
                 $idProd       =             $producto["idProducto"];
                 $nombre       = utf8_encode($producto["nombreProducto"]);
                 $descripcion  = utf8_encode($producto["descripcionProducto"]);
                 $categoria    =             $producto["categoriaProducto"];
                 $precio       =             $producto["precioProducto"];
                 $imagen       = utf8_encode($producto["imagenProducto"]);
                 $oferta       =             $producto["ofertaProducto"];




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
  <form class="form-horizontal" id="modificaAdminForm" action="procesoModificaProd.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputEmail1" class="col-sm-2 control-label">Id </label>
         <div class="col-sm-2">
          <input type="text" class="form-control" id="prodId" name="idProducto" readonly="true" <?php echo "value='$idProd'"; ?> />
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Nombre </label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="prodNombre" name="nombreProd" <?php  echo "value='$nombre'"; ?>/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Descripción</label>
         <div class="col-sm-10">
           <textarea id="prodDesc" name="descProd" rows="5" cols="100"><?php  echo "$descripcion"; ?></textarea> 
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Categoría</label>
         <div class="col-sm-10">
           <select class="form-control" id="prodCateg" name="categProd" title="Elegir Categoría"/>
                 <option value="0" <?php if ($categoria==0) {
                                            echo "selected='selected'";
                                          }
                                            ?>>--- Seleccione Categoría ---</option>
                 <option value="1" <?php if ($categoria==1) {
                                            echo "selected='selected'";
                                          }
                                            ?>>Productos Químicos</option>
                 <option value="2" <?php if ($categoria==2) {
                                            echo "selected='selected'";
                                          }
                                            ?>>Cloradores Salinos</option>
                 <option value="3" <?php if ($categoria==3) {
                                            echo "selected='selected'";
                                          }
                                            ?>>Iluminación</option>
                 <option value="4" <?php if ($categoria==4) {
                                            echo "selected='selected'";
                                          }
                                            ?>>Accesorios</option>
                 <option value="5" <?php if ($categoria==5) {
                                            echo "selected='selected'";
                                          }
                                            ?>>Equipamiento</option>
                 <option value="6" <?php if ($categoria==6) {
                                            echo "selected='selected'";
                                          }
                                            ?>>Calefacción</option>

           </select>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Precio u$s</label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="prodPrecio" name="precioProd" <?php  echo "value='$precio'"; ?>/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputFile2" class="col-sm-2 control-label">*Imágen</label>
         <div class="col-sm-6">
          <input type="file" accept="image/*" id="prodImagen" name="imagenProd" <?php  echo "value='$imagen'"; ?>/>
         </div>
         <div class="col-sm-4">
          <img <?php echo "src=../$imagen";?> width='50 px' height='50 px'>
        </div>
        <div class="form-group">
          <label for="inputFile2" class="col-sm-2 control-label">*Oferta</label>
          <div class="col-sm-6">
          <label class="radio-inline">
           <input type="radio" name="prodOferta" id="ofertaProdNo" value="2" <?php if ($oferta==2) {
                                                                                      echo "checked='checked'";}?>> Normal
          </label>
          <label class="radio-inline">
           <input type="radio" name="prodOferta" id="ofertaProdSi" value="1" <?php if ($oferta==1) {
                                                                                      echo "checked='checked'";}?>> Oferta
          </label>
         </div>
         </div>
        </div>
        
        <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <span id="errormensajemodifica" style="color: red;"></span>
           <h6 style="color: blue;">* Campos Requeridos </h6>
         </div>
        </div>
       </div>

      
       <div class="modal-footer">
        <a href="listadoProductosAdmin.php"><button type="button" class="btn btn-default">Cancelar</button></a>
        <button type="button" class="btn btn-primary" onclick="CheckFormModificaProd();">Modificar Producto</button>
       </form>  
      </div> 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="jsAdmin/controlAdmin.js"></script>	
</body>
</html>