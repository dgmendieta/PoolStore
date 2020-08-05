<?php  
   session_start();
    if (isset($_SESSION["usuarioADMIN"])){
    //guardar nombre de usuario
    $nombreadmin = $_SESSION["usuarioADMIN"];
  } else {
    header("Location: inicioAdmin.php");
  }
  //end if
   // conectar al servidor de BD
     $conectarAdmin = mysqli_connect("fdb16.awardspace.net","2402545_spc","Waderlinnesmar_73","2402545_spc");
    // controlar conexión
    if (!$conectarAdmin) {
      echo "No Se Encuentra Servidor o Base de datos";
      header ("refresh:10;url=".$_SERVER['HTTP_REFERER']);
    } // endif
    // seleccionar Base de Datos
    //$elegirBD = mysql_select_db("spc",$conectar);
    // controlar selección de Base de Datos
    //if (!$elegirBD) {
     //   header("Location: paginaError.php?error=No Se Encuentra Servidor");
    //} // endif
?>