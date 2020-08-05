<?php
  include "includes/conexion.inc";
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/control.js"></script>  
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
   
   <title>Pool Store - Carrito de Compras</title>

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
   <div class="container">
  <div class="col-md-12">
         <div class="titulo" id="titulo"></div>
          
     <?php 
        $mensaje = ""; 
       if (isset($_GET["MSG"])) {
       $mensaje = $_GET["MSG"];
        echo "<h5><kbd>$mensaje</kbd></h5>";
       }
       ?>
      <table class="content_cart table table-striped table-bordered" id="content_cart"></table>   
         </div>
  </div>
 
  <?php
   // CERRAR CONEXION
     // mysqli_close($conectar);
  ?>
   


<!--SECCION FOOOTER-->
 <?php
  include "includes/footer.inc"
 ?>
 
 
 <!--TERMINA FOOTER-->

 
</body>
</html>