<?php
 include "includesAdmin/conexionAdmin.inc";

// capturar y convertir datos

 $dir           = "../imagenes/";
 $nombre     	= utf8_decode(ucwords($_POST["nombreProd"]));
 $descripcion   = utf8_decode        ($_POST["descProd"]);
 $categoria     =           		  $_POST["categProd"];
 $precio   		=             		  $_POST["precioProd"];
 $oferta   		=        	          $_POST["prodOferta"];
 
 
 if (is_uploaded_file($_FILES['imagenProd']['tmp_name'])){                                  
        $imagen = $dir.basename($_FILES['imagenProd']['name']);                                   
        move_uploaded_file($_FILES['imagenProd']['tmp_name'],$imagen);                           
    }// else {                                                                           
       // header("Location: ../errorPage.php?MSG=Ocurrió un problema al subir la imagen");  
   // } // endif                                                                         
 

//crear y concatenar sentencia
$sql  ="INSERT INTO `productos`(`idProducto`, `nombreProducto`, `descripcionProducto`, `categoriaProducto`, `precioProducto`, "; 
$sql .=" `monedaProducto`, `imagenProducto`, `ofertaProducto`) "; 
$sql .=" VALUES(null,'$nombre','$descripcion',$categoria,$precio,2,'$imagen',$oferta);";

//die($sql);
//ejectuar sentencia

 $resultado = mysqli_query($conectarAdmin,$sql);
 
  if (!$resultado) {
    
    header ("refresh:4;url=".$_SERVER['HTTP_REFERER']);
    echo "Ya existe un producto con este nombre.";
  } else {
     //volver al formulario insertar
    header("refresh:3;url=".$_SERVER['HTTP_REFERER']);
    echo "Producto Ingresado...";
   }
 //cerrar conexion 
 
 mysqli_close($conectarAdmin);
?>