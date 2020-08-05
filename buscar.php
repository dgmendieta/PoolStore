<?php
  
  include "includes/conexion.inc";
  
// CAPTURAR DATOS

 $texto = "";
 $texto = $_POST["buscarData"];
 
 $sql  = "SELECT * FROM productos,categorias,moneda WHERE "; 
 $sql .= " nombreProducto LIKE '%$texto%' ";
 $sql .= " AND categoriaProducto=idCat ";
 $sql .= " AND monedaProducto=idMoneda;";
 
 //die($sql);
 
 $datos    = mysqli_query ($conectar,$sql);
 $lineas   = mysqli_num_rows ($datos);
    if ($lineas==0) {
        $mensaje = "No se encontraron resultados.";
    } else {
       $mensaje = "Se encontraron $lineas resultados";
    }



?>


<!DOCTYPE HTML>
<html>
 <head>
	  <meta http-equiv="content-type" content="text/html" />
      <meta name="fSPDiseño" content="Todo para piscinas" />
      <meta charset="utf-8"/>
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
   
   
  <title>Pool Store - Búsqueda</title>
 
    
   
 </head>

<body>
 <!--SECCION MENU -->
 <?php
  include "includes/menu.inc"
 ?>

<!-- SECCION CARROUSEL -->

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
  <div class="row">
   <div class="col-lg-12">
   <div class="panel panel-primary">
     <div class="panel-heading">
<?php      
  
   echo "<h1><img src='imagenes/logo4.png' width='80 px' height='70 px' /> $mensaje</h1></div>\n";
   echo "</div>\n";
    
    while ($producto = mysqli_fetch_array($datos)){
        
 $idP           =             $producto["idProducto"];        
 $nombreP       = utf8_encode($producto["nombreProducto"]);
 $descripcionP  = utf8_encode($producto["descripcionProducto"]);
 $precioP       =             $producto["precioProducto"];
 $monedaP       = utf8_encode($producto["nombreMoneda"]);
 $imagenP       = utf8_encode($producto["imagenProducto"]); 
    
    echo "<div class='panel panel-default'>\n";
    echo "\t<div class='panel-heading'>\n";
    echo "\t<div class='row'>\n";
    echo "\t<div class='col-md-4'>\n";
    echo "\t\t<a href='$imagenP' target='blank'>\n";
    echo "\t\t\t<img src='$imagenP' width='25%' height='25%' alt='$nombreP'/>\n";
    echo "\t\t\t</a>\n";
    echo "</div>\n";
    echo "<div class='col-md-8'>\n";
    echo "<div class='row'>\n";
    echo "\t<div class='col-md-8'>\n";
    echo "<a href='iProducto.php?v=$idP'><h3>$nombreP</h3></a>\n";
    echo "\t\t\t<h4>Precio $monedaP: $precioP c/u</h4>\n";
    echo "</div>\n";
    echo "<div class='col-md-4'>\n";
    echo "\t<form class='form-inline add' id='agregarCarritoForm' action='insert.php' method='POST'>\n";
    echo "\t<div class='form-group'>\n";
    echo "\t\t&nbsp;\n";
    echo "\t\t&nbsp;<br />";
    echo "\t\t\t<input type='text' class='form-control' id='id' name='id' style='display: none;' value='$idP'/>\n";
    echo "\t\t\t<input type='text' class='form-control' id='nombre' name='nombre' style='display: none;' value='$nombreP'/>\n";
    echo "\t\t\t<input type='text' class='form-control' id='precio' name='precio' style='display: none;' value='$precioP'/>\n";
    echo "\t\t\t<input type='number' class='form-control' id='cantidad' name='cantidad' min='1' max='15' style='max-width: 30%;' value='1'/>\n";
    echo "\t\t\t<button class='btn btn-success'>Agregar al carrito</button>\n";
    echo "\t\t</div>\n";
    echo "\t</form>\n";
    echo "\t</div>\n";
    echo "\t</div>\n";
    echo "\t\t</div>\n";
    echo "\t</div>\n"; 
    echo " </div>\n";
    echo "</div>\n";
    }
    
    ?>
    
    </div>
   </div>
  </div>
 



<!--SECCION FOOOTER-->
 <?php
  include "includes/footer.inc"
 ?>
 
 
 <!--TERMINA FOOTER-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/control.js"></script>	
<?php 
   // CERRAR CONEXION
   mysqli_close($conectar);
  ?>
</body>
</html>