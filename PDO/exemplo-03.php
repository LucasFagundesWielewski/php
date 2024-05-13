<?php 

//Criação do banco de dados

$conn = new PDO ("mysql:host=127.0.0.1:3312;dbname=dbphp7;", "root", "");

// Criação do "prepare" -> Tendo como função inserir na tabela usuarios o login e a senha

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "12345";

// O "bindParam" tem a função de armazenar as variáevis em parâmetros

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

// Executa o código

$stmt->execute();

echo "Inserido OK!";

?>