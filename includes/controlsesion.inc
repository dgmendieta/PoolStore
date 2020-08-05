<?php 
//CONTROLAR INICIO DE SESION
 session_start();
  if (isset($_SESSION["usuario"])){
    //guardar nombre de usuario
    $nombreusuario = $_SESSION["usuario"];
  } //end if
  
?>