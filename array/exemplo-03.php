<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Lucas',
	'idade'=>19
));

array_push($pessoas, array(
	'nome'=>'Claudio',
	'idade'=>28
));

print_r($pessoas[0]["nome"]);

?>