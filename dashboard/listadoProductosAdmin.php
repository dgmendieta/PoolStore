<?php
 include "includesAdmin/conexionAdmin.inc"
?>
<!DOCTYPE HTML>
<html>  
 <head>
	  <meta http-equiv="content-type" content="text/html" />
      <meta name="fSPDiseño" content="Todo para piscinas" />
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <link href="../css/bootstrap.css" rel="stylesheet"/>
      <link rel="shortcut icon" type="image/x-icon" href="../imagenes/favicon.ico" />

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
 <style type="text/css">
   body {
    padding-top: 70px;
    background-color: #E5E5E5;
   }
  
   </style>
   
    
    <title>Pool Store - Admin - Listado Productos</title>

    
   
 </head>

<body>
 <!--SECCION MENU -->
 <?php
  include "includesAdmin/menuAdmin.inc"
 ?>
<?php
  if (isset($GET["orden"])){
  	 $orden = $GET["orden"];
  } else {
 $orden = "idProducto";
}

 $sql  = "SELECT * FROM productos,categorias,moneda WHERE ";
 $sql .= " categoriaProducto=idCat ";
 $sql .= " AND monedaProducto=idMoneda ORDER BY '$orden';";
 
 //die($sql);
 
 $datosProdAdmin = mysqli_query ($conectarAdmin,$sql);
 ?>
 <div class="container">
 <div class="table-responsive">
  <table class="table">
   <tr>
   <th>
   <a href="listadoProductosAdmin.php?orden=idProducto" title="Ordenar por Id">Id</a>
   </th>
   <th>
   <a href="listadoProductosAdmin.php?orden=nombreProducto" title="Ordenar por Nombre">Nombre</a>
   </th>
   <th>
   <a href="listadoProductosAdmin.php?orden=categoriaProducto" title="Ordenar por Categoría">Categoría</a>
   </th>
   <th>Imágen</th>
   <th>
   <a href="listadoProductosAdmin.php?orden=precioProducto" title="Ordenar por Precio">Precio</a>
   </th>
   <th>
   <a href="listadoProductosAdmin.php?orden=ofertaProducto" title="Ordenar por Oferta">Oferta</a>
   </th>
   </tr>
 
<?php
  
    while ($productoAdmin = mysqli_fetch_array($datosProdAdmin)){
        
 $idPAdmin           =             $productoAdmin["idProducto"];        
 $nombrePAdmin       = utf8_encode($productoAdmin["nombreProducto"]);
 $ofertaPAdmin       = utf8_encode($productoAdmin["ofertaProducto"]);
 $precioPAdmin       =             $productoAdmin["precioProducto"];
 $categoriaPAdmin    = utf8_encode($productoAdmin["nombreCat"]);
 $imagenPAdmin       = utf8_encode($productoAdmin["imagenProducto"]); 

   echo "<tr>\n";
   echo "\t<td>$idPAdmin</td>\n";
   echo "\t<td><a href ='modificaProducto.php?id=$idPAdmin' 
                  title='Modificar Datos'>$nombrePAdmin</a></td>\n";
   echo "\t<td>$categoriaPAdmin</td>\n";
   echo "\t<td><img src=../$imagenPAdmin width='50 px' height='50 px'></td>\n";
   echo "\t<td>$precioPAdmin</td>\n";
   echo "\t<td>$ofertaPAdmin</td>\n";
   echo "</tr>\n";

 }   
 ?>

 </table>
</div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="jsAdmin/controlAdmin.js"></script>	
</body>
</html> 