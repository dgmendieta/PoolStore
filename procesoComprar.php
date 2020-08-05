<?php
 	include "includes/conexion.inc";
  

  $lineas = "";
  $comentario = utf8_decode($_POST["comentarios"]);
  $mensajeConfirma = "";

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
        header("Location:http://www.poolstore.com.uy/verCarrito.php?MSG=No se pudo registrar la compra");
       
    } else {
        // leer registro
      $regUSR = mysqli_fetch_array($resultado);
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
   



  
  $mensajeConfirma = "<!doctype html><html><body><table class='table table-bordered'>";
	$mensajeConfirma .= "<tr>";
	$mensajeConfirma .= "<th class='danger' colspan='6'>Detalles de la Compra</th>";
	$mensajeConfirma .= "</tr>";
	$mensajeConfirma .= "<tr>";
	$mensajeConfirma .= "<th class='info'>Nombre</th>";
	$mensajeConfirma .= "<td>$nombre $apellido</td>";
	$mensajeConfirma .= "<th class='info'>N&uacute;mero de cliente</th>";
	$mensajeConfirma .= "<td>$id</td>";
	$mensajeConfirma .= "<th class='info'>Celular</th>";
	$mensajeConfirma .= "<td>$celular</td>";
	$mensajeConfirma .= "</tr>";
	$mensajeConfirma .= "<tr>";
	$mensajeConfirma .= "<th class='info'>Direcci&oacute;n</th>";
	$mensajeConfirma .= "<td>$direccion</td>";
	$mensajeConfirma .= "<th class='info'>Tel&eacute;fono</th>";
	$mensajeConfirma .= "<td>$telefono</td>";
	$mensajeConfirma .= "</tr>";
  $mensajeConfirma .= "<tr>";
	$mensajeConfirma .= "<th class='info'>Entre Calles</th>";
	$mensajeConfirma .= "<td>$esquina</td>";
	$mensajeConfirma .= "<td>$esquina2</td>";
	$mensajeConfirma .= "<th class='info'>Email</th>";
	$mensajeConfirma .= "<td>$email</td>";
	$mensajeConfirma .= "</tr>";
	$mensajeConfirma .= "</table>";
 	
 } // endif 

 $mensajeConfirma .="<table class='table table-bordered'>";
 $mensajeConfirma .="<tr>";
 $mensajeConfirma .="<th colspan='5'>Art&iacute;culos</th>";
 $mensajeConfirma .="</tr>";
 $mensajeConfirma .="<tr>";
 $mensajeConfirma .="<th>Id</th>";
 $mensajeConfirma .="<th>Nombre</th>";
 $mensajeConfirma .="<th>Precio</th>";
 $mensajeConfirma .="<th>Cantidad</th>";
 $mensajeConfirma .="<th>Subtotal</th>";
 $mensajeConfirma .="</tr>";

  
  
 foreach($_SESSION['carrito'] as $idP => $valores) {
  
  if ($idP == "articulos_total") {
    $cantarticulos = $valores;
   } else if ($idP == "precio_total") {
    $totalfinal = $valores; 
  } else {
    $mensajeConfirma .="<tr>\n";
    $mensajeConfirma .="<td>" . $idP . "</td>\n";
    $mensajeConfirma .="<td>" . $valores['nombre'] . "</td>\n";
    $mensajeConfirma .="<td>" . $valores['precio'] . "</td>\n";
    $mensajeConfirma .="<td>" . $valores['cantidad'] . "</td>\n";
    $mensajeConfirma .="<td>" . $valores['total'] . "</td>\n";
     
   }
  }

$mensajeConfirma .="<tr>\n";
$mensajeConfirma .="<th colspan='2' class= 'text-right'>Total de Art&iacute;culos</th>\n";
$mensajeConfirma .="<td class= 'text-right'>" . $cantarticulos . "</td>\n";
$mensajeConfirma .="<th>Total de la Compra</th>\n";
$mensajeConfirma .="<th class= 'text-right'>u&#36;s  " . $totalfinal . "</th>";
$mensajeConfirma .="</tr>\n";

 
$mensajeConfirma .= "<tr><th>Comentarios<th>";

$mensajeConfirma .="<td colspan='4'>" . $comentario . "</td></tr>"; 
$mensajeConfirma .= "</table></body></html>";

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

mail ("contacto@poolstore.com.uy","Compra Realizada",$mensajeConfirma,$cabeceras);
mail ("$email","Compra Realizada",$mensajeConfirma,$cabeceras);

header ("refresh:5;url=http://www.poolstore.com.uy/index.php");
echo "Se ha enviado el pedido correctamente...";
require("Carrito.class.php");
  $carrito = new Carrito();
  $carrito->destroy(); 

?>
