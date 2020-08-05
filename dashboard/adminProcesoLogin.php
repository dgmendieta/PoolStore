<?php
    include "includesAdmin/conexionDBAdmin.inc";
    // capturar datos del formulario LOGIN
    $usuarioAdmin =       $_POST["usuarioAdmin"];
	$contrasenaAdmin = md5($_POST["claveAdmin"]);
    
    // crear sentencia SQL para buscar usuario
    $sql = "SELECT * FROM administradores WHERE nombreAdmin='$usuarioAdmin' AND contrasenaAdmin='$contrasenaAdmin'";
     //die($sql);
    // ejecutar sentencia SQL
    $resultadoAdmin = mysqli_query($conectarAdmin,$sql);
    // verificar existencia
    if (mysqli_num_rows($resultadoAdmin)==0) {
        // mensaje de error
        header("Location: ../paginaError.php?error=Verifique usuario y/o contraseña");
    } else {
        // leer registro
      $regADM = mysqli_fetch_array($resultadoAdmin);
        // crear variable de sesión
        session_start();
        $_SESSION["usuarioADMIN"] = $regADM["nombreAdmin"];
        $_SESSION["idUsuarioADMIN"] = $regADM["idAdmin"];
        $_SESSION["hora"] = date("Y-m-d H:i:s");
        // redirigir a bienvenida
        header("Location: listadoProductosAdmin.php");
    } // endif 


?>