<?php 
$conectarAdmin = mysqli_connect("fdb16.awardspace.net","2402545_spc","Waderlinnesmar_73","2402545_spc");
    // controlar conexión
    if (!$conectarAdmin) {
      echo "No Se Encuentra Servidor o Base de datos";
      header ("refresh:10;url=".$_SERVER['HTTP_REFERER']);
    } // endif
 ?>