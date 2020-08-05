
<!--EMPIEZA MENU DESPLEGABLE--> 
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#title-navbar-collapse-1" aria-expanded="false" 
              style="margin-top: 1%">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php"><img src="imagenes/logo3.png" width="180 px" height="50 px"  style="margin-top: 4%"/></a>    
    </div>
   <div class="collapse navbar-collapse" id="title-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-top: 1%">
    
        <li class=""><a href="empresa.php">Empresa<span class="sr-only">(current)</span></a></li>
        
       
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos
           <span class="caret"></span>
          </a>
           <ul class="dropdown-menu" style="margin-top: 1%">
             <li><a href="tProducto.php">Todos los Productos</a></li>
             
             <li role="separator" class="divider"></li>
             
             <li><a href="categoriaProducto.php?v=2">Cloradores Salinos</a></li>
             <li><a href="categoriaProducto.php?v=5">Equipamiento</a></li>
             <li><a href="categoriaProducto.php?v=3">Iluminación</a></li>
             <li><a href="categoriaProducto.php?v=6">Calefacción</a></li>
             
             <li role="separator" class="divider"></li>
             
             <li><a href="categoriaProducto.php?v=1">Productos Químicos</a></li>
             <li><a href="categoriaProducto.php?v=4">Accesorios</a></li>
             
             <li role="separator" class="divider"></li>
             
             <li><a href="oProducto.php">Ofertas</a></li>
                                   
          </ul> 
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios<span class="caret"></span></a>
           <ul class="dropdown-menu" style="margin-top: 1%">
             <li><a href="asesoramiento.php">Asesoramiento</a></li>  
            
             <li role="separator" class="divider"></li>
             
             <li><a href="mantenimiento.php">Mantenimiento</a></li>
             
             <li role="separator" class="divider"></li>
             
             <li><a href="servicioTecnico.php">Servicio Técnico</a></li>
             
             <!--<li role="separator" class="divider"></li>

             <li><a href="fotos.php">Galería de Fotos</a></li>-->
          </ul>
        </li>
      </ul>  
        
   
      <form class="navbar-form navbar-right" id="buscarForm" action="buscar.php" method="POST" style="margin-top: 1.2%">
        <div class="input-group">
          <input type="text" id="dataBuscar" name="buscarData" class="form-control" placeholder="Búsqueda" value=""/>
           <span class="input-group-btn">
             <button type="button" class="btn btn-default" onclick="CheckFormBuscar();"> 
               <i class="glyphicon glyphicon-search"></i>
             </button>
           </span>     
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
      <?php

       if (isset($nombreusuario)==""){
         echo "\t<li><a href='#' data-toggle='modal' data-target='#registroModal'><span class='glyphicon glyphicon-user'></span> Registrarse</a></li>\n";
         echo "\t\t<li><a href='#' data-toggle='modal' data-target='#sesionModal'><span class='glyphicon glyphicon-log-in'></span> Ingresar</a></li>\n";
      } else {
        echo "\t<li><a href='editaUsuario.php'><span>Actualizar datos: $nombreusuario</span></a></li>\n";
        echo "\t\t<li><a href='procesoLogout.php'><span class='glyphicon glyphicon-log-out'></span> Salir</a></li>\n";
      }//end if
      
      ?>

      <li><a href='verCarrito.php'><span class='glyphicon glyphicon-shopping-cart'> </span><span class="badge" id="cart"></span></a></li>
      </ul>
    </div><!--COLLAPSE NAVBAR-->
   </div><!--CONTAINER-->
  </nav> <!--FIN DE MENU DESPLEGABLE-->	 

  

<!-- Modal Inicio sesión -->
<div class="modal fade" id="sesionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title" id="myModalLabel"><img src="imagenes/logo4.png" width="80 px" height="70 px" /> Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" id="ingresoForm" action="procesoLogin.php" method="POST">
        <div class="form-group">
         <label for="inputEmail3" class="col-sm-2 control-label">Correo Electrónico</label>
        <div class="col-sm-10">
         <input type="email" class="form-control" id="dataCorreo" name="correoDir" placeholder="Correo Electrónico" required="required"/>
        </div>
       </div>
        <div class="form-group">
         <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="dataClave" name="clave" placeholder="Contraseña" required="required"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="recuperarClave.php">Olvidé mi contraseña</a><br />
      <span id="errormensaje" style="color: red;"></span>
   
    </div>
   </div>
  </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="CheckFormIngreso();">Ingresar</button>
   </form>  
      </div>
    </div>
  </div>
</div>

<!-- Modal Registro -->
<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
        <h4 class="modal-title" id="myModalLabel"><img src="imagenes/logo4.png" width="80 px" height="70 px" /> Registro</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" id="registroForm" action="procesoRegistro.php" method="POST">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Nombre </label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="dataNombre" name="nombreUsr" placeholder="Nombre"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Apellido</label>
         <div class="col-sm-10">
           <input type="text" class="form-control" id="dataApellido" name="apellidoUsr" placeholder="Apellido"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Correo Electrónico</label>
         <div class="col-sm-10">
           <input type="email" class="form-control" id="dataMail" name="correoUsr" placeholder="Correo Electrónico"/>
         </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">*Contraseña</label>
         <div class="col-sm-10">
           <input type="password" class="form-control" id="dataContra" name="claveUsr" placeholder="Contraseña"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">*Confirmar Contraseña</label>
         <div class="col-sm-10">
           <input type="password" class="form-control" id="dataContra2" name="claveUsr2" placeholder="Confirmar Contraseña"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Teléfono</label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="dataTelefono" name="telUsr" placeholder="Teléfono"/>
         </div>
         </div>
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Celular</label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="dataCelular" name="celUsr" placeholder="Celular"/>
         </div>
        </div>
       
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Dirección</label>
         <div class="col-sm-10">
           <input type="text" class="form-control" id="dataDireccion" name="direccionUsr" placeholder="Dirección"/>
         </div>
        </div>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">*Entre</label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="dataEsquina" name="esqUsr" placeholder="Entre calles"/>
         </div>
         </div>
         <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">y</label>
         <div class="col-sm-10">
          <input type="text" class="form-control" id="dataEsquina2" name="esq2Usr" placeholder="Entre calles"/>
         </div>
        </div>
        <div class="form-group">
         <div class="col-sm-offset-2 col-sm-10">
           <span id="errormensajereg" style="color: red;"></span>
           <h6 style="color: blue;">* Campos Requeridos </h6>
         </div>
        </div>
       </div>

      
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="CheckFormRegistro();">Registrarme</button>
       </form>  
      </div>
    </div>
  </div>
</div>

