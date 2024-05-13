<?php

function ola($texto = "Mundo",$periodo = "Bom dia"){

	return "Olá $texto! $periodo<br>";

}

echo ola();
echo ola("Lucas", "Boa noite");
echo ola("Vida", "");

?>