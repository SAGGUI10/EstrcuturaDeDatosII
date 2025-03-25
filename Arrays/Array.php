<?php
	
	$frutas = array("Appale","banano","fresa");
	$mango = "mango";
	$frutas[] = $mango;
	print_r($frutas);
	$frutaEliminar = "fresa";
	$llave = array_search($frutaEliminar,$frutas);
	if($llave != false)
	{
	  unset($frutas[$llave]);
	}
	print_r($frutas);
	
?>