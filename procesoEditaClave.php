<?php
 include "includes/conexion1.inc";

// capturar y convertir datos

 
 
 $clave      =         md5($_POST["claveEdit"]);
 

//crear y concatenar sentencia
$sql  =" UPDATE `usuarios` SET `contrasenaUsuario`='$clave' WHERE `nombreUsuario`='$nombreusuario' AND `idUsuario`=$idUsuario;";

//die($sql);
//ejectuar sentencia

 $resultado = mysqli_query($conectar,$sql);
 
  if (!$resultado) {
    
    header ("Location: paginaError.php?error=No se pudo cambiar contraseña, Por favor póngase en contacto con nostros");
  } else {
     //volver al formulario insertar
    
    header("refresh:5;url=www.poolstore.com.uy/index.php");
    echo "Cambio de Contraseña confirmado.";
   }
 //cerrar conexion 
 
 mysqli_close($conectar);
?>
