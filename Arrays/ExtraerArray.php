<?php
	
	$frutas = array("Manzana","banano","fresa");
	$mango = "mango";
	$frutas[] = $mango;
	print_r($frutas);

    $futasSeleccioar = array_slice($frutas,1,2);
    print_r($futasSeleccioar);
?>