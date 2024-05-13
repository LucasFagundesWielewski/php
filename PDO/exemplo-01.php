<?php  

// Criando uma conexão com o banco de dados

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1:3312","root", "");

// Variavel "$stmt" recebendo a conexão "$conn"

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

// Enviando o comando para o banco de dados

$stmt->execute();


// "fetch_all" -> Retorna com todos os resultados
// "PDO::FETCH_ASSOC" -> Constante interna (da classe PDO)

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Para percorrer os dados usamos um "foreach"

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {

		echo "<strong>".$key.":</strong>".$value."<br>";

	}

	echo "=================================<br>";
}

//var_dump($results);

?>