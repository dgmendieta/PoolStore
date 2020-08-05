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
   
    
    <title>Pool Store - Empresa</title>

    
   
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
  	<h2><img src="imagenes/logo4.png" width="60 px" height="50 px"/> Sobre Nosotros</h2>
  	</div>
    <div class="panel-body">	
      <p id="pdescrip">Somos una empresa familiar, con más de 10 años de experiencia en este apasionante y desafiante rubro.</p>
  		<p id="pdescrip">Buscamos constantemente la satisfacción de nuestros clientes, así como la propia, al saber que hacemos 
  		   lo imposible por mejorar día a día y mantenernos actualizados en conocimientos y productos a ofrecer.</p>
  		<p id="pdescrip">Marcamos la diferencia en el mercado, gracias a la atención personalizada que brindamos. Sabemos con certeza
  		   que el seguimiento personalizado de mantenimientos, obras, servicios técnicos y asesoramientos es el camino correcto.</p>
  		<p id="pdescrip">Recientemente, y gracias a la confianza de nuestros clientes y amigos, importamos productos de probada trayectoria y respaldo.</p>
  		<p id="pdescrip">Usted puede confiar el servicio integral de su piscina a la familia de <b>Pool Store</b>. 
  	       <cite>Vivirla plenamente, es todo por lo que deberá preocuparse.</cite></p>      
  	 	</div>
  </div>
 </div>

<!--SECCION FOOOTER-->
 <?php
  include "includes/footer.inc"
  //mysqli_close($conectar);
 ?>
 
 
 <!--TERMINA FOOTER-->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/control.js"></script>	
</body>
</html>