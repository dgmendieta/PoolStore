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
   
    
    <title>Pool Store - Recuperar Contraseña</title>

    
   
 </head>

<body>
 <!--SECCION MENU -->
 <?php
  include "includes/menu.inc"
 ?>
  <div class="row">

  
<div class="col-md-6 col-md-offset-3">
  
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3><img src="imagenes/logo4.png" width="80 px" height="70 px" /> Recuperar Contraseña</h3>
      </div>
      <div class="panel-body">
       <form class="form-horizontal" id="recupForm" action="procesoRecuperarClave.php" method="POST">
        <div class="form-group">
         <label for="inputEmail1" class="col-sm-2 control-label">Correo Electrónico</label>
        <div class="col-sm-10">
         <input type="email" class="form-control" id="dataCorreoRecup" name="correoDir" placeholder="Correo Electrónico" required="required"/>
          <span></span><br/>
          <span id="errormensajerec" style="color: red;"></span>
          <span><mark>Por favor ingrese su dirección de correo registrada.</mark></span> 
          <span><mark>Se enviará un link a su casilla para que pueda cambiar la contraseña.</mark></span>
        </div>
          
       </div>
         <div class="panel-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="CheckFormRecup();">Enviar</button>
   </form>  
       </div>
      </div>
    </div>
 
</div>

</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/control.js"></script>	
</body>
</html>
