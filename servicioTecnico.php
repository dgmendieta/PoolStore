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
   
    
    <title>Pool Store - Servicio Técnico</title>

    
   
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
  	<h2><img src="imagenes/logo4.png" width="80 px" height="70 px"/> Servicio Técnico</h2>
  		</div>
      <div class="panel-body">
  		<p id="pdescrip">Tenemos vasta experiencia en resolver problemas en piscinas de todo tipo.</p>
  		 <h3 style="margin-left: 6%;">*Obras</h3>
  		<p id="pdescrip">Asesoramos en construccion y diagramado de piscinas y equipos. Realizamos instalaciones de 
  		   hidráulica y equipos.</p>
  		 <h3 style="margin-left: 6%;">*Casas</h3>
  		<p id="pdescrip">Evaluamos, reparamos, mejoramos y remplazamos equipos de filtrado, bombeo, calefacción, clorado.</p> 
  		<p id="pdescrip">Detectamos y reparamos pérdidas.</p> 
  		<p id="pdescrip">Recuperamos el agua verde para que vuelva a estar cristalina y apta para baños.</p>     
  		<p id="pdescrip">Extienda el verano gracias a los sistemas de calefacción que instalamos.</p>
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