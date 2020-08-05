<?php
  include "includes/conexion.inc";
  
//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
 
	require("Carrito.class.php");
	$carrito = new Carrito();
	$precio_total = $carrito->precio_total();
	$articulos_total = $carrito->articulos_total();
	if($carrito->get_content())
	{
		echo json_encode(array(
				"res" 				=> 	"ok", 
				"content" 			=> 	$carrito->get_content(),
				"precio_total" 		=> 	$precio_total,
				"articulos_total" 	=> 	$articulos_total
			)
		);	
	}else{
		echo json_encode(array("res" => "empty"));
	}
    
}
//mysqli_close($conectar);
?>


