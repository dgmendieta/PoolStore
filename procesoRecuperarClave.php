<?php
    include "includes/conexion.inc";
    // capturar datos del formulario LOGIN
    $usuario =       $_POST["correoDir"];
	$codigo     = md5(rand(1,99999999));
    $mail       = base64_encode($usuario);
    
    $mensaje = "http://www.poolstore.com.uy/confirmaClave.php?pas=$codigo&u=$mail";
    // crear sentencia SQL para buscar usuario
    $sql = "UPDATE usuarios SET claveUsuario='$codigo' WHERE emailUsuario='$usuario'";
     //die($sql);
    // ejecutar sentencia SQL
    $resultado = mysqli_query($conectar,$sql);
    // verificar existencia
    if (!$resultado) {
        // mensaje de error
        header("refresh:3;url=index.php");
        echo "La dirección de correo ingresada no se encuentra en nuestros registros.";
    } else {
         mail($usuario,"Pool Store-Recuperar Clave " . $usuario,$mensaje);
         header("refresh:5;url=index.php");
         echo "Se ha enviado un correo a su dirección, para que ingrese y cambie su contraseña.";
      
    } // endif 


?>