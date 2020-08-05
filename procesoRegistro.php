<?php
 include "includes/conexion.inc";

// capturar y convertir datos

 $nombre     = utf8_decode(ucwords($_POST["nombreUsr"]));
 $apellido   = utf8_decode(ucwords($_POST["apellidoUsr"]));
 $correo     = utf8_decode($_POST["correoUsr"]);
 $telefono   =             $_POST["telUsr"];
 $celular    =             $_POST["celUsr"];
 $clave      =         md5($_POST["claveUsr"]);
 $direccion  = utf8_decode(ucwords($_POST["direccionUsr"]));
 $esquina    = utf8_decode(ucwords($_POST["esqUsr"]));
 $esquina2   = utf8_decode(ucwords($_POST["esq2Usr"]));
 $codigo     = md5(rand(1,99999999));
 $mail       = base64_encode($correo);
 
 $mensaje = "http://www.poolstore.com.uy/confirmaCorreo.php?cod=$codigo&u=$mail";

//crear y concatenar sentencia
$sql  ="INSERT INTO `usuarios`(`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `telefonoUsuario`, `direccionUsuario`, "; 
$sql .=" `esquina1Usuario`, `esquina2Usuario`, `emailUsuario`, `celularUsuario`, `contrasenaUsuario`, `confirmaUsuario`, `estadoUsuario`,`claveUsuario`) "; 
$sql .=" VALUES(null,'$nombre','$apellido',$telefono,'$direccion','$esquina','$esquina2','$correo',$celular,'$clave','$codigo',1,null);";

//die($sql);
//ejectuar sentencia

 $resultado = mysqli_query($conectar,$sql);
 
  if (!$resultado) {
    
    header ("refresh:4;url=".$_SERVER['HTTP_REFERER']);
    echo "La dirección de correo ingresada, ya existe en nuestros registros.";
  } else {
     //volver al formulario insertar
    //mail($correo,"Confirmar Registro. Bienvenido " . $nombre,$mensaje);
    header("refresh:10;url=".$_SERVER['HTTP_REFERER']);
    echo "Registro exitoso. Se ha enviado un correo a su dirección para completar el registro. Gracias";
   }
 //cerrar conexion 
 
 mysqli_close($conectar);
?>