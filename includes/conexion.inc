<?php  
   session_start();
    if (isset($_SESSION["usuario"])){
    //guardar nombre de usuario
    $nombreusuario = $_SESSION["usuario"];
    $idUsuario = $_SESSION["idusuario"];
  } //end if
   // conectar al servidor de BD
     $conectar = mysqli_connect("fdb16.awardspace.net","2402545_spc","Waderlinnesmar_73","2402545_spc");
    // controlar conexión
    if (!$conectar) {
      echo "No Se Encuentra Servidor o Base de datos";
      header ("refresh:10;url=".$_SERVER['HTTP_REFERER']);
    } // endif
   
?>