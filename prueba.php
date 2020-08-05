<?php
include "includes/conexion.inc";
$sql="SELECT * FROM usuarios WHERE idUsuario=11;";

$datos = mysqli_query($conectar,$sql);
$resultado = mysqli_fetch_array($datos);
var_dump($resultado);
?>