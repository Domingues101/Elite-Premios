<?php
$host = "localhost";
$user = "root";
$pass = ""; // Sua senha do MySQL
$banco = "banco_de_dados";

// 1. Conecta ao banco
$conexao = mysqli_connect($host, $user, $pass, $banco);

// 2. Pega os dados do formulário
$cpf = $_POST['cpf_usuario'];
$nome = $_POST['nome_usuario'];
$insta = $_POST['insta_usuario'];

// 3. Monta o SQL (Usando o que aprendemos sobre duplicados!)
$sql = "INSERT INTO cadastro (CPF, NOME, INSTAGRAM) 
        VALUES ('$cpf', '$nome', '$insta')
        ON DUPLICATE KEY UPDATE NOME = '$nome', INSTAGRAM = '$insta'";

// 4. Executa
if(mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>