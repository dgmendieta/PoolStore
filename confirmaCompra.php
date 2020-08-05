<?php
include "includes/conexion.inc";
  
  $lineas = "";

   if (isset($_SESSION["usuario"])){
  $nomUsr = $_SESSION["usuario"];
   
    }
  if (isset($_SESSION["idusuario"])){
  $idUsr     = $_SESSION["idusuario"];
   
    $sql = "SELECT * FROM usuarios WHERE idUsuario='$idUsr'";
     //die($sql);
    // ejecutar sentencia SQL
    $resultado = mysqli_query($conectar,$sql);
    $lineas = mysqli_num_rows($resultado);
    }
   // verificar existencia
    if ($lineas=="") {
        // mensaje de error
        header("Location: verCarrito.php?MSG=Debe estar registrado para realizar una compra");
       
    } 
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   	  <script src="js/bootstrap.min.js"></script>
	    <script src="js/control.js"></script>	

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
 <style type="text/css">
   body {
    background-color: #E5E5E5;
    padding-top: 50px;
   }
  
   </style>
   
    
    <title>Pool Store - Confirmar Compra</title>

    
   
 </head>

<body>
 <?php 
      $regUSR="";
        // leer registro
      $regUSR = mysqli_fetch_array($resultado);
       if ($regUSR!="") {
       // crear variable de sesión
        $id 		   =             $regUSR["idUsuario"];
        $nombre 	 = utf8_encode($regUSR["nombreUsuario"]);
        $apellido  = utf8_encode($regUSR["apellidoUsuario"]);
        $direccion = utf8_encode($regUSR["direccionUsuario"]);
        $esquina 	 = utf8_encode($regUSR["esquina1Usuario"]);
        $esquina2  = utf8_encode($regUSR["esquina2Usuario"]);
        $telefono  =             $regUSR["telefonoUsuario"];
        $email 		 = utf8_encode($regUSR["emailUsuario"]);
        $celular 	 =             $regUSR["celularUsuario"];
   



  echo "<div class='container'>";
  echo "<table class='table table-bordered'>";
	echo "<tr>";
	echo "<th class='danger' colspan='6'>Detalles de la Compra</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<th class='info'>Nombre</th>";
	echo "<td>$nombre $apellido</td>";
	echo "<th class='info'>Número de cliente</th>";
	echo "<td>$id</td>";
	echo "<th class='info'>Celular</th>";
	echo "<td>$celular</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th class='info'>Dirección</th>";
	echo "<td>$direccion</td>";
	echo "<th class='info'>Teléfono</th>";
	echo "<td>$telefono</td>";
	echo "</tr>";
        echo "<tr>";
	echo "<th class='info'>Entre Calles</th>";
	echo "<td>$esquina</td>";
	echo "<td>$esquina2</td>";
	echo "<th class='info'>Email</th>";
	echo "<td>$email</td>";
	echo "</tr>";
	echo "</table>";
 	
}  
?>
 <table class="table table-bordered">
   <tr>
   
   <th colspan="5">Artículos</th>
   </tr>
   <tr>
   <th>Id</th>
   <th>Nombre</th>
   <th>Precio</th>
   <th>Cantidad</th>
   <th>Subtotal</th>
   </tr>

  
<?php
  
 foreach($_SESSION['carrito'] as $idP => $valores) {
  
  if ($idP == "articulos_total") {
    $cantarticulos = $valores;
   } else if ($idP == "precio_total") {
    $totalfinal = $valores; 
  } else {
    echo "<tr>\n";
    echo "<td>" . $idP . "</td>\n";
    echo "<td>" . $valores['nombre'] . "</td>\n";
    echo "<td>" . $valores['precio'] . "</td>\n";
    echo "<td>" . $valores['cantidad'] . "</td>\n";
    echo "<td>" . $valores['total'] . "</td>\n";
     
   }
  }

echo "<tr>\n";
echo "<th colspan='2' class= 'text-right'>Total de Artículos</th>\n";
echo "<td class= 'text-right'>" . $cantarticulos . "</td>\n";
echo "<th>Total de la Compra</th>\n";
echo "<th class= 'text-right'>u&#36;s  " . $totalfinal . "</th>";
echo "</tr>\n";
 ?>
 <form action="procesoComprar.php" method="POST" name="confirmaDatos">
 <tr>
 <td class="text-right" colspan="5">
  <a href="verCarrito.php" type="cancel" class="btn btn-danger">Cancelar</a>
  <button type="submit" class="btn btn-primary">Enviar Pedido</button>
 </td>
 </tr>
 </table>
 <h4>Comentarios</h4>

<textarea name="comentarios" rows="5" cols="100"></textarea> 

</form>
</div>
<?php
mysqli_close($conectar);
?>

</body>
</html>