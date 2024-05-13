<?php  

// Conectando no banco de dados

$conn = new mysqli("127.0.0.1:3312", "root", "", "dbphp7");

// 	Verifica se o código deu erro

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;

}

// Pesquisando dentro do banco de dados

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// Variaevl data como "array"

$data = array();

// While tem a função de organizar as linhas com o "fetch_assoc()"
 
while ($row = $result->fetch_assoc()) {

	// Salvando as informações no "array"
	array_push($data, $row);

}

echo json_encode($data);

?>