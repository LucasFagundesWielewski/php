<?php 

//Criação do banco de dados

$conn = new PDO ("mysql:host=127.0.0.1:3312;dbname=dbphp7;", "root", "");

// Criação do "prepare" -> Tendo como função deletar uma row pelo ID

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = "1";

// O "bindParam" tem a função de armazenar as variáevis em parâmetros

$stmt->bindParam(":ID", $id);

// Executa o código

$stmt->execute();

echo "Excluido OK!";

?>