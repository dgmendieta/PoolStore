<?php
 include "includes/conexion1.inc";

// capturar y convertir datos
 
 $id         =                     $_POST["idUsr"];
 $nombre     = utf8_decode(ucwords($_POST["nombreUsr"]));
 $apellido   = utf8_decode(ucwords($_POST["apellidoUsr"]));
 $correo     = utf8_decode($_POST["correoUsr"]);
 $telefono   =             $_POST["telUsr"];
 $celular    =             $_POST["celUsr"];
 $clave      =         md5($_POST["claveUsr"]);
 $direccion  = utf8_decode(ucwords($_POST["direccionUsr"]));
 $esquina    = utf8_decode(ucwords($_POST["esqUsr"]));
 $esquina2   = utf8_decode(ucwords($_POST["esq2Usr"]));
 
 
 
//crear y concatenar sentencia
$sql  ="UPDATE `usuarios` SET `nombreUsuario`='$nombre', `apellidoUsuario`='$apellido', `telefonoUsuario`=$telefono, `direccionUsuario`='$direccion', "; 
$sql .=" `esquina1Usuario`='$esquina', `esquina2Usuario`='$esquina2', `emailUsuario`='$correo', `celularUsuario`=$celular "; 
$sql .=" WHERE `idUsuario`=$id ;";

//die($sql);
//ejectuar sentencia

 $resultado = mysqli_query($conectar,$sql);
 
  if (!$resultado) {
    
    header ("refresh:4;url=".$_SERVER['HTTP_REFERER']);
    echo "La dirección de correo ingresada, ya existe en nuestros registros.";
  } else {
     //volver al formulario insertar
    header("refresh:10;url= index.php");
    echo "Registro exitoso. Se han actualizado los datos. Gracias";
   }
 //cerrar conexion 
 
 mysqli_close($conectar);
?>