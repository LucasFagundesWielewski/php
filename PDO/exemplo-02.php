<?php  

// Criando uma conexão com o banco de dados

$conn = new PDO ("sqlsrv:server=localhost;ConnectionPooling=0;Database=dbphp7;", "sa", "root");

// Variavel "$stmt" recebendo a conexão "$conn"

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

// Enviando o comando para o banco de dados

$stmt->execute();


// "fetch_all" -> Retorna com todos os resultados
// "PDO::FETCH_ASSOC" -> Constante interna (da classe PDO)

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($results);

?>