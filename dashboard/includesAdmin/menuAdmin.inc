
<!--EMPIEZA MENU DESPLEGABLE--> 
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#title-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="admin.php"><img src="imagenesAdmin/logo3.png" width="180 px" height="50 px"  style="margin-top: 4%"/></a>    
    </div>
   <div class="collapse navbar-collapse" id="title-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-top: 1%">
    
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos
           <span class="caret"></span>
          </a>
           <ul class="dropdown-menu" style="margin-top: 1%">
             <li><a href="listadoProductosAdmin.php">Listado de Productos</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="ingresoProducto.php">Ingreso de Productos</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="idmodificaProducto.php">Modificar Productos</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="eliminaProducto.php">Eliminar Productos</a></li>
                         
           </ul> 
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Imágenes<span class="caret"></span></a>
           <ul class="dropdown-menu" style="margin-top: 1%">
             <li><a href="actualizaCarrousel.php">Carrousel</a></li>  
            
             <li role="separator" class="divider"></li>
             
             <li><a href="actualizaGaleria.php">Galería</a></li>
                       
          </ul>
        </li>
      </ul>  
        
   
     <ul class="nav navbar-nav navbar-right" style="margin-top: 1%">
      
      <li><a href='#'><span>Bienvenido:<?php echo "$nombreadmin" ?></span></a></li>
      <li><a href="procesoLogoutAdmin.php"><span class='glyphicon glyphicon-log-out'></span> Salir</a></li>
           
     </ul>
    </div><!--COLLAPSE NAVBAR-->
   </div><!--CONTAINER-->
  </nav> <!--FIN DE MENU DESPLEGABLE-->	 

  




