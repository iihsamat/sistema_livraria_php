<?php
//Recebendo dados do formulario

$nome = $_POST['nome'];
$email = $_POST['email'];
$setor = $_POST['setor'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

//Inserindo banco de dados

include 'conexao.php';

//Dados para inserir os dados
$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$setor','$email','$senha')";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

if($query) {
    echo "<script>alert('Cadastrado com sucesso'); history.back();</script>";
 
 } else {
     echo "<script>alert('Error no seu script php'); history.back();</script>";
 }

?>