<?php
    include "includes/conexion.inc";
    // capturar datos del formulario LOGIN
    $usuario =       $_POST["correoDir"];
	$contrasena= md5($_POST["clave"]);
    
    // crear sentencia SQL para buscar usuario
    $sql = "SELECT * FROM usuarios WHERE emailUsuario='$usuario' AND contrasenaUsuario='$contrasena'";
     //die($sql);
    // ejecutar sentencia SQL
    $resultado = mysqli_query($conectar,$sql);
    // verificar existencia
    if (mysqli_num_rows($resultado)==0) {
        // mensaje de error
        header("Location: paginaError.php?error=Verifique usuario y/o contraseña");
    } else {
        // leer registro
      $regUSR = mysqli_fetch_array($resultado);
        // crear variable de sesión
        session_start();
        $_SESSION["usuario"] = $regUSR["nombreUsuario"];
        $_SESSION["idusuario"] = $regUSR["idUsuario"];
        $_SESSION["hora"] = date("Y-m-d H:i:s");
        // redirigir a bienvenida
        header("Location:".$_SERVER['HTTP_REFERER']);
    } // endif 


?>