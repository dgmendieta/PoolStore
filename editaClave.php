<?php
  include "includes/conexion1.inc";
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
   
    
    <title>Pool Store - Cambiar Contraseña</title>

    
   
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
   <div class="col-lg-8">
    <div class="panel panel-default">
     <div class="panel-heading">
      <h1><img src="imagenes/logo4.png" width="45 px" height="40 px"/> Cambiar Contraseña de Usuario</h1>
     </div>
   <form class="form-horizontal" id="claveForm" action="procesoEditaClave.php" method="POST">
        <div class="panel-body">
        <div class="form-group">
          <label for="inputPassword2" class="col-sm-2 control-label">*Contraseña</label>
         <div class="col-sm-6">
           <input type="password" class="form-control" id="cambiaClave" name="claveEdit" placeholder="Contraseña Nueva"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputPassword2" class="col-sm-2 control-label">*Confirmar Contraseña</label>
         <div class="col-sm-6">
           <input type="password" class="form-control" id="cambiaClave2" name="claveEdit2" placeholder="Confirmar Contraseña Nueva"/>
         </div>
        </div>
       
        <div class="form-group">
         <div class="col-sm-offset-2 col-sm-6">
           <span id="errormensajeclave" style="color: red;"></span>
           <h6 style="color: blue;">* Campos Requeridos </h6>
         </div> 
         <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
        <a href="index.php"><button type="button" class="btn btn-default pull-right">Cancelar</button></a>
        <button type="button" class="btn btn-primary pull-right" onclick="CheckFormClave();">Cambiar Contraseña</button>
        </div>



 </div>
 </div> 
</div>
</div>
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