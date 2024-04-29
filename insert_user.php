<?php
//Recebendo dados do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];

//Inserindo banco de dados

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$setor','$email','$senha')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

echo "Inserido com Sucesso";

?>