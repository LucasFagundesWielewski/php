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

echo json_encode($pessoas);

?>