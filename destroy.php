<?php
//comprobamos que sea una petición ajax
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
 
	require("Carrito.class.php");
	$carrito = new Carrito();
	$carrito->destroy(); 
    
}