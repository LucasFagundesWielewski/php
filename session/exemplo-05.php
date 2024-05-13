<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:
		echo "Sessão desativada!";
		break;
	
	case PHP_SESSION_NONE:
		echo "Sessão habilitada mas não ativa!";
		break;

	case PHP_SESSION_ACTIVE:
		echo "Sessão ativada!";
		break;

	default:
		echo "Erro!";
		break;
}

?>