<?php
  include "includes/conexion.inc";
  ?>


<!DOCTYPE HTML>
<html>
 <head>
	    <meta http-equiv="content-type" content="text/html" />
      <meta charset="utf-8"/>
      <meta property="og:locale" content="es_ES" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="Pool Store - Uruguay - Viva plenamente su Piscina" />
      <meta property="og:description" content="Pool Store Uruguay. Importador y distribuidor de todo lo que necesita para vivir plenamente su piscina. 
        Mantenimientos, Servicio Técnico, Entregas a domicilio." />
      <meta property="og:url" content="http://poolstore.com.uy/" />
      <meta property="og:site_name" content="Pool Store Uruguay - Viva plenamente su Piscina" />
      <meta name="keywords" content="piscinas,piscinas uy,piscinas uruguay,piscinas productos,piscinas mantenimiento,piscinas equipos,piscinas cloradores" />
      <meta name="author" content="Pool Store Uruguay - Mantenimientos, Equipos, Químicos, Reparaciones, Accesorios, Calefacción" />

      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link href="css/bootstrap.css" rel="stylesheet"/>
      <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
 <style type="text/css">
   body {
    background-color: #E5E5E5;
    padding-top: 70px;
   }
  
   </style>
   
    
    <title>Pool Store - Inicio</title>

    
   
 </head>

<body>
 <!--SECCION MENU -->
 <?php
  include "includes/menu.inc"
 ?>

<!-- SECCION CARROUSEL -->
<!--EMPIEZA CARROUSEL-->
 <div class="container">
  <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

  <!-- Imagenes -->
   <div class="carousel-inner">
    <div class="item active">
      <img src="imagenes/slide1.jpg" alt=""/>
    </div>

    <div class="item">
      <img src="imagenes/slide2.jpg" alt=""/>
    </div>

    <div class="item">
      <img src="imagenes/slide3.jpg" alt=""/>
    </div>
   </div>

  <!-- Controles -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#myCarousel" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
   </a>
  </div><!--CONTAINER-->
 </div><!-- FIN DE CARROUSEL-->
 
<!--SECCION OFERTAS - DINAMICO-->
 <div class="container">
  <div class="row-fluid">
   <div class="span12">
    <div class="panel panel-success">
     <div class="panel-heading">
      <h1><a href="oProducto.php"><img src="imagenes/logo4.png" width="45 px" height="40 px" /> Ofertas</a></h1>
     </div>
    </div>
  <div  class="row-fluid">
  
  <?php 
    
    $sql = "SELECT * FROM productos,categorias,moneda WHERE ofertaProducto=1 ";
    $sql .= " AND categoriaProducto=idCat ";
    $sql .= " AND monedaProducto=idMoneda ORDER by idCat ;";
    
    
    $datos = mysqli_query ($conectar,$sql);
    
    while ($ofertas = mysqli_fetch_array($datos)) {
                 
                 $id           =             $ofertas["idProducto"];
                 $nombre       = utf8_encode($ofertas["nombreProducto"]);
                 $descripcion  = utf8_encode($ofertas["descripcionProducto"]);
                 $categoria    = utf8_encode($ofertas["nombreCat"]);
                 $precio       =             $ofertas["precioProducto"];
                 $moneda       = utf8_encode($ofertas["nombreMoneda"]);
                 $imagen       = utf8_encode($ofertas["imagenProducto"]);   
       
     echo "\t<div class='col-md-3'>\n";
     echo "\t\t<div class='thumbnail' style='width: 270px; height: 400px;'>\n";
     echo "\t\t<a href='iProducto.php?v=$id' class='thumbnail'>\n";
     echo "\t\t\t<img src='$imagen' style='width: 180px; height: 180px;' alt='$nombre'/>\n";
     echo "\t\t</a>\n";
     echo "\t\t<div class='caption'>\n";
     echo "\t\t<a href='iProducto.php?v=$id'>\n";
     echo "\t\t\t<h4>$nombre</h4>\n";
     echo "\t\t</a>\n";
     echo "\t\t\t<h5>Precio $moneda: $precio c/u</h5>";
     echo "\t\t<form class='form-inline add' id='agregarCarritoForm' action='insert.php' method='POST'>\n";
     echo "\t\t<div class='form-group'>\n";
     echo "\t\t\t<input type='text' class='form-control' id='id' name='id' style='display: none;' value='$id'/>\n";
     echo "\t\t\t<input type='text' class='form-control' id='nombre' name='nombre' style='display: none;' value='$nombre'/>\n";
     echo "\t\t\t<input type='text' class='form-control' id='precio' name='precio' style='display: none;' value='$precio'/>\n";
     echo "\t\t<input type='number' class='form-control' id='cantidad' name='cantidad' min='1' max='15' style='max-width: 30%;' value='1'/>\n";
     echo "\t\t\t<button class='btn btn-success'>Agregar al carrito</button>\n";
     echo "\t\t\t</div>\n";
     echo "\t\t</form>\n";
     echo "\t\t</div>\n";
     echo "\t\t</div>\n";
     echo "\t</div>\n";
      } // end while (siguiente registro)

      mysqli_close($conectar);          
  ?>
   </div>
   </div>
  </div>
 </div>

<!--SECCION CATEGORIAS--> 
 <div class="container">
  <div class="row-fluid">
   <div class="span12">
    <div class="panel panel-info">
     <div class="panel-heading">
      <h1><img src="imagenes/logo4.png" width="45 px" height="40 px" /> Categorías</h1>
      </div>
     </div>
  <div  class="row-fluid">
   <div class="col-md-4">
     <div class="thumbnail">
      <a href="categoriaProducto.php?v=1" class="thumbnail">
       <img src="imagenes/dicloro.jpg" style="width: 80%; height: 80%;"/>
      </a>
     <div class="caption">
      <a href="categoriaProducto.php?v=1">
       <h4>Productos Químícos</h4>
      </a>
     </div>
    </div>
   </div>
   <div class="col-md-4">
     <div class="thumbnail">
      <a href="categoriaProducto.php?v=2" class="thumbnail">
       <img src="imagenes/cloradorpoolstore.jpg" style="width: 80%; height: 80%;"/>
      </a>
     <div class="caption">
      <a href="categoriaProducto.php?v=2">
       <h4>Cloradores Salinos</h4>
      </a>
     </div>
    </div>
   </div>
   <div class="col-md-4">
     <div class="thumbnail">
      <a href="categoriaProducto.php?v=3" class="thumbnail">
       <img src="imagenes/iluminacion.jpg" style="width: 80%; height: 80%;"/>
      </a>
     <div class="caption">
      <a href="categoriaProducto.php?v=3">
       <h4>Iluminación</h4>
      </a>
     </div>
    </div>
   </div>
 </div><!--FIN PRIMERA LINEA CATEGORIAS-->
 
  <div class="row-fluid">
   <div class="col-md-4">
     <div class="thumbnail">
      <a href="categoriaProducto.php?v=4" class="thumbnail">
       <img src="imagenes/accesorios.jpg" style="width: 80%; height: 80%;"/>
      </a>
     <div class="caption">
      <a href="categoriaProducto.php?v=4">
       <h4>Accesorios</h4>
      </a>
     </div>
    </div>
   </div>
   <div class="col-md-4">
    <div class="thumbnail">
     <a href="categoriaProducto.php?v=5" class="thumbnail">
      <img src="imagenes/equipamiento.jpg" style="width: 80%; height: 80%;"/>
     </a>
    <div class="caption">
     <a href="categoriaProducto.php?v=5">
      <h4>Equipamiento</h4>
     </a>
     </div>
    </div>
   </div>
   <div class="col-md-4">
     <div class="thumbnail">
      <a href="categoriaProducto.php?v=6" class="thumbnail">
       <img src="imagenes/calefaccion.jpg" style="width: 80%; height: 80%;"/>
      </a>
     <div class="caption">
      <a href="categoriaProducto.php?v=6">
       <h4>Calefacción</h4>
      </a>
     </div>
    </div>
   </div>
  </div><!--FIN SEGUNDA LINEA CATEGORIAS-->
 </div>
</div>
</div><!--CONTAINER-->


<!--SECCION FOOOTER-->
 <?php
  include "includes/footer.inc"
  //
 ?>
 
 
 <!--TERMINA FOOTER-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/control.js"></script>	
</body>
</html>