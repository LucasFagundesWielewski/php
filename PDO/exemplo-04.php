<?php 

//Criação do banco de dados

$conn = new PDO ("mysql:host=127.0.0.1:3312;dbname=dbphp7;", "root", "");

// Criação do "prepare" -> Tendo como função inserir na tabela usuarios o login e a senha onde o id é igual ao parametro

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "João";
$password = "banana";
$id = "2";

// O "bindParam" tem a função de armazenar as variáevis em parâmetros

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

// Executa o código

$stmt->execute();

echo "Alterados OK!";

?>