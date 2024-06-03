<?php 

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];

include 'conexao.php';

$update = "UPDATE `tb_user` SET `nm_usuario` = '$nome ', `nm_setor` = '$setor', `login` = '$login' WHERE `id_usuario` = $codigo
";
$query = mysqli_query($conexao, $update);

echo "Inserido com Sucesso";


?>