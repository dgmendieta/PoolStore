<?php
include "includes/conexion.inc";

$codigo = $_GET["pas"];
$correo = base64_decode($_GET["u"]);

$sql = "SELECT * FROM usuarios WHERE claveUsuario='$codigo' AND emailUsuario='$correo';";
//die($sql);
$resultado = mysqli_query($conectar,$sql);
  
  if (mysqli_num_rows($resultado)!=0) {
           $datos = mysqli_fetch_array($resultado);
            
   	         $idUsr = $datos["idUsuario"];
                 $sql1 = "UPDATE usuarios SET claveUsuario='' WHERE idUsuario=$idUsr;";
                 $resultado1 = mysqli_query($conectar,$sql1);
                 $_SESSION["usuario"] = $datos["nombreUsuario"];
                 $_SESSION["idusuario"] = $datos["idUsuario"];
                 $_SESSION["hora"] = date("Y-m-d H:i:s");
          // redirigir a bienvenida
        header("refresh:3;url=editaClave.php");
        echo "Será redirigido para poder cambiar su contraseña. Aguarde un momento por favor...";
      } 
       else {
           header("refresh:3;url=index.php");
           echo "Este link de recuperación ya fué usado.";
      } 
?>