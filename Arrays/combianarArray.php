<?php

$datos = ["nombre"=>"Juan","edad"=>20,"correo"=>"juanm@gmail.com"];
$datos2 = ["ciudad"=>"Simijaca","Profesion"=>"ciclista"];

$datosCombinados = array_merge($datos,$datos2);
print_r($datosCombinados);



?>