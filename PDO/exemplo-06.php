<?php 

//Criação do banco de dados

$conn = new PDO ("mysql:host=127.0.0.1:3312;dbname=dbphp7;", "root", "");

$conn->beginTransaction();

// Criação do "prepare" -> Tendo como função deletar uma row pelo ID

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = "2";

// Executa o código e passa o parametro dentro o "execute()"

$stmt->execute(array($id));

// Cancela a exclusão

//$conn->rollback();

// Executa caso dê certo o código

$conn->commit();

echo "Excluido OK!";

?>