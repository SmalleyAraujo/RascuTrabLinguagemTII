<?php
// Conectar ao banco de dados (substitua pelas suas informações)
$servername = "seu_servidor";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filtro = $_POST["filtro"];
    $sql = "SELECT * FROM sua_tabela WHERE Nome LIKE '%$filtro%' OR ID LIKE '%$filtro%' OR CPF LIKE '%$filtro%'";
} else {
    // Consulta padrão sem filtro
    $sql = "SELECT * FROM sua_tabela";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>";
        echo "Nome: " . $row["Nome"] . "<br>";
        echo "CPF: " . $row["CPF"] . "<br>";
        echo "RG: " . $row["RG"] . "<br>";
        echo "Telefone: " . $row["Telefone"] . "<br>";
        echo "E-mail: " . $row["Email"] . "<br>";
        echo "Logradouro: " . $row["Logradouro"] . "<br>";
        echo "Cidade: " . $row["Cidade"] . "<br>";
        echo "UF: " . $row["UF"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();
?>