<?php
  session_start();
  //cerrar sesión
  session_destroy();
 
   //ir a página de ingreso
  header("Location: inicioAdmin.php");
 


?>