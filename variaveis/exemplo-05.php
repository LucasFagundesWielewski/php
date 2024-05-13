<?php

$nome = "Lucas";

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){

	$nome = "Claudio";

	echo $nome. "Agora no teste 2";

}

teste();

teste2();

?>