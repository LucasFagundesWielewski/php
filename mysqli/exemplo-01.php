<?php  

// Conectando no banco de dados

$conn = new mysqli("127.0.0.1:3312", "root", "", "dbphp7");

// 	Verifica se o código deu erro

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;

}

// Criação do "$stmt" para a inserção de dados

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

// "bind_param" => recebe o valor de duas strins e depois duas variáveis

$stmt->bind_param("ss",$login,$pass);

// Variáveis do 'bind_param'

$login = "user";
$pass = "12345";

// Enviando o comando para o banco de dados
$stmt->execute();

// Variáveis do 'bind_param'
$login = "root";
$pass = "54321";

// Enviando o comando para o banco de dados
$stmt->execute();

?>