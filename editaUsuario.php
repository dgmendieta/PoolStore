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
   
    
    <title>Pool Store - Actualizar Datos</title>

    
   
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
   <div class="col-lg-10">
    <div class="panel panel-default">
     <div class="panel-heading">
      <h1><img src="imagenes/logo4.png" width="45 px" height="40 px" /> Actualizar Datos de Usuario</h1>
     </div>
    
 
  <?php 
    
    $sql = "SELECT * FROM usuarios WHERE idUsuario=$idUsuario AND nombreUsuario='$nombreusuario';";
    //die($sql);
    
    $datos        = mysqli_query ($conectar,$sql);
    $datosUsuario = mysqli_fetch_array($datos);
    $nombre       = utf8_encode($datosUsuario["nombreUsuario"]);
    $apellido     = utf8_encode($datosUsuario["apellidoUsuario"]);
    $correo       = utf8_encode($datosUsuario["emailUsuario"]);
    $telefono     =             $datosUsuario["telefonoUsuario"];
    $celular      =             $datosUsuario["celularUsuario"];
    $clave        =             $datosUsuario["contrasenaUsuario"];
    $direccion    = utf8_encode($datosUsuario["direccionUsuario"]);
    $esquina      = utf8_encode($datosUsuario["esquina1Usuario"]);
    $esquina2     = utf8_encode($datosUsuario["esquina2Usuario"]);
   ?> 
    <div class="panel-body">
      <form class="form-horizontal" id="editaForm" action="procesoEditaUsuario.php" method="POST">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Nombre </label>
         <div class="col-sm-8">
          <input type="text" class="form-control" id="editaNombre" name="nombreUsr" <?php echo "value='$nombre'"?> />
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Apellido</label>
         <div class="col-sm-8">
           <input type="text" class="form-control" id="editaApellido" name="apellidoUsr" <?php echo "value='$apellido'"?> />
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Correo Electrónico</label>
         <div class="col-sm-8">
           <input type="email" class="form-control" id="editaMail" name="correoUsr" <?php echo "value='$correo'"?> />
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Teléfono</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" id="editaTelefono" name="telUsr" <?php echo "value='$telefono'"?> />
         </div>
         </div>
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Celular</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" id="editaCelular" name="celUsr" <?php echo "value='$celular'"?> />
          <input type="text" class="form-control" id="editaId" name="idUsr" style="display: none;" <?php echo "value='$idUsuario'"?> />
         </div>
        </div>
        <div class="form-group">
          <label for="inputPassword1" class="col-sm-2 control-label">*Contraseña</label>
         <div class="col-sm-8">
           <a href="editaClave.php"><button type="button" class="btn btn-primary">Cambiar Contraseña</button></a>
         </div>
        </div>
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Dirección</label>
         <div class="col-sm-8">
           <input type="text" class="form-control" id="editaDireccion" name="direccionUsr" <?php echo "value='$direccion'"?> />
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Entre</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" id="editaEsquina" name="esqUsr" <?php echo "value='$esquina'"?> />
         </div>
         </div>
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">y</label>
         <div class="col-sm-8">
          <input type="text" class="form-control" id="editaEsquina2" name="esq2Usr" <?php echo "value='$esquina2'"?> />
         </div>
        </div>
        <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <span id="errormensajeedit" style="color: red;"></span>
           <h6 style="color: blue;">* Campos Requeridos </h6>
         </div>
        </div>
       

      <div class="form-group">
       <div class="col-sm-offset-2 col-sm-10">
        <a href="index.php"><button type="button" class="btn btn-default pull-right">Cancelar</button></a>
        <button type="button" class="btn btn-primary pull-right" onclick="CheckFormEditar();">Enviar Datos</button>
        </div>
       </form> 
    </div>
  </div>
</div>
</div>   
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