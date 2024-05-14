<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'paper_24/1'; // Ajuste o nome do banco de dados aqui

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die('Connect Error (' . $conexao->connect_errno . ') ' . $conexao->connect_error);
} else {
    //echo "Conexão efetuada"; // Você pode descomentar esta linha para verificar se a conexão foi estabelecida com sucesso
}
?>
