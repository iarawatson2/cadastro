<?php
// Inclua o arquivo de configuração para conectar ao banco de dados
include_once('config.php');

// Verifique se o formulário foi submetido
if (isset($_POST['submit'])) {
    // Obtenha os dados do formulário e evite SQL Injection
    $nome = mysqli_real_escape_string($conexao, $_POST['NOME']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $data_nascimento = mysqli_real_escape_string($conexao, $_POST['DATA_NASC']);

    // Insira os dados na tabela 'usuarios'
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, data_nasc) VALUES('$nome', '$email', '$data_nascimento')");

    if ($result) {
        echo "Novo registro criado com sucesso.";
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Formulário de Cadastro</title>
</head>
<div class="usuario">
    <img src="./icons/usuario.png" alt="usuario" srcset="">
</div>
    <div class="container">
        <form action="formulario.php" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="Nome" name="NOME" id="NOME" class="inputUser" required>
            </div>
            <div class="inputBox">
                <input type="email" placeholder="Email" name="email" id="email" class="inputUser" required>
            </div>
            <div class="inputBox">
                <input type="date" placeholder="Data de nascimento" name="DATA_NASC" id="DATA_NASC" class="inputUser" required>
            </div>
            <button type="submit" name="submit" id="submit" value="Cadastrar">CADASTRAR</button>
        </form>
    </div>
</body>
</html>
