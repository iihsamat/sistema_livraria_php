<?php
 
$nome_cliente = $_POST['nomecliente'];
$endereco = $_POST['enderecocliente'];
$numero = $_POST['numeroendereco'];
$cpf = $_POST['numerocpf'];
$cnpj = $_POST['numerocnpj'];
$telefone = $_POST['numerotelefone'];
 
include 'conexao.php';
 
$insert = "INSERT INTO tb_cliente VALUES (NULL,'$nome_cliente','$endereco','$numero','$cpf','$cnpj','$telefone')";
 
$query = mysqli_query($conexao, $insert);
 
echo "Inserido com Sucesso";
 
 
?>