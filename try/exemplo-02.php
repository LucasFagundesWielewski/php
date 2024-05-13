<?php 

function trataNome($name){


	if (!$name) {

		throw new Exception("Error Processing Request", 1);
	
	} 

	echo ucfirst($name) . "<br>";

}

try {

	trataNome("João");
	trataNome("");

} catch (Exception $e) {

	echo $e->getMessage();

} finally {

	echo "Executou o try";

}

?>