<?php
 include "includesAdmin/conexionDBAdmin.inc"
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
    background-color: #E5E5E5;
   }
  
   </style>
   
    
    <title>Pool Store - Administración - Ingreso</title>

    
   
 </head>

<body>
 <!--SECCION MENU -->
 


 <div class="container">
 <div class="row">
 <div class="col-md-4 col-md-offset-3" style="margin-top:15%">
 <form class="form-horizontal" id="ingresoAdminForm" action="adminProcesoLogin.php" method="POST">
        <div class="form-group">
         <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
         <input type="email" class="form-control" id="dataUsuarioAdmin" name="usuarioAdmin" placeholder="Nombre de Usuario" required="required"/>
        </div>
       </div>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-4 control-label">Contraseña</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="dataClaveAdmin" name="claveAdmin" placeholder="Contraseña" required="required"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     
      <span id="errormensajeadmin" style="color: red;"></span>
        <a href="../index.php"><button type="button">Cancelar</button></a>
        <button type="button" class="btn btn-primary" onclick="CheckFormAdmin();">Ingresar</button>
    </div>
   </div>
  </form>
 
 
 </div>
</div>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="jsAdmin/controlAdmin.js"></script>	
</body>
</html>