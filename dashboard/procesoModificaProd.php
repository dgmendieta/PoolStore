<?php
 include "includesAdmin/conexionAdmin.inc";

// capturar y convertir datos

 $dir           = "../imagenes/";
 $idProd        =                     $_POST["idProducto"];
 $nombre     	= utf8_decode(ucwords($_POST["nombreProd"]));
 $descripcion   = utf8_decode        ($_POST["descProd"]);
 $categoria     =           		  $_POST["categProd"];
 $precio   		=             		  $_POST["precioProd"];
 $oferta   		=        	          $_POST["prodOferta"];
 
 
 if (is_uploaded_file($_FILES['imagenProd']['tmp_name'])){                                  
        $imagen = $dir.basename($_FILES['imagenProd']['name']);                                   
        move_uploaded_file($_FILES['imagenProd']['tmp_name'],$imagen);                           
        $imagen = "`imagenProducto`='$imagen',";
    } else {                                                                           
       $imagen = "";  
    } // endif                                                                         
 

//crear y concatenar sentencia
$sql  ="UPDATE `productos` SET `nombreProducto`='$nombre', `descripcionProducto`='$descripcion', `categoriaProducto`=$categoria, "; 
$sql .=" `precioProducto`=$precio, `monedaProducto`=2, $imagen `ofertaProducto`=$oferta "; 
$sql .=" WHERE `idProducto`=$idProd;";

//die($sql);
//ejectuar sentencia

 $resultado = mysqli_query($conectarAdmin,$sql);
 
  if (!$resultado) {
    
    header ("refresh:4;url=".$_SERVER['HTTP_REFERER']);
    echo "Ya existe un producto con este nombre.";
  } else {
     //volver al formulario insertar
    header("refresh:3;url=idmodificaProducto.php");
    echo "Producto Modificado...";
   }
 //cerrar conexion 
 
 mysqli_close($conectarAdmin);
?>