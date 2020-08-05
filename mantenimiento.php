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
   #pdescrip {
    margin-left: 4%;
    font-size: 20px;
    letter-spacing: 1px;
    font-family: georgia;
   }
  
   </style>
   
    
    <title>Pool Store - Mantenimiento</title>

    
   
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
 
 <div class="container" >
  <div class="panel panel-default">
   <div class="panel-heading">

  	<h2><img src="imagenes/logo4.png" width="60 px" height="50 px"/> Mantenimiento</h2>
  	</div>
    <div class="panel-body">	
  		<p id="pdescrip">Realizamos el mantenimiento integral de la piscina. Destacamos el servicio de mantenimiento anual.
  		   Éste permite realizar mantenimiento correctivo y predictivo de equipos, no espere al verano para 
  		   que aparezca un problema. Además, tener una piscina con el agua cristalina durante todo el año, 
  		   es más conveniente de lo que parece.</p>
  		<p id="pdescrip">Utilizamos los mejores productos químicos de plaza. 
  		   Brindamos una atención personalizada durante todo el año.</p> 
  		<p id="pdescrip">Contáctenos y agende una visita. Teléfono -  Correo - </p>
  		<p id="pdescrip">En <b>Pool Store</b> nos encargamos del buen estado de agua y equipos para que pueda 
  		   <cite>Vivir plenamente su piscina.</cite></p>
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
</body>
</html>