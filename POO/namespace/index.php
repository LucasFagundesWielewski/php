<?php  

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Lucas Ferreira");
$cad->setEmail("dawdsadaw@gmail.com");
$cad->setSenha("124578");

$cad->registrarVenda();

?>