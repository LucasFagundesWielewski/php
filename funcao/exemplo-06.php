<?php

$pessoa = array(
	'nome'=>'Lucas',
	'idade'=>20
);

foreach ($pessoa as &$value) {
	
if (gettype($value) === 'integer') $value += 10;

	echo $value . "<br>";

}

print_r($pessoa);

?>