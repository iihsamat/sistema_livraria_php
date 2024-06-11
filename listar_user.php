<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
  </head>
<body2>
<style>
    .icon{
      color: black;
    }
    .icon2{
      color: red;
    }
  </style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-book"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_cliente2.php">Cadastrar Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_user.html">Cadastrar Editora</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Relatórios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="listar_user.php">Lista de Usuarios</a></li>
              <li><a class="dropdown-item" href="listar_cliente.php">Lista de Clientes</a></li>
              <li><a class="dropdown-item" href="listar_editora.php">Lista de Editoras</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <?php
      session_start();
      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "Olá, $username";
      } else {
        echo "<script>alert('Usuário precisa ser logado'); history.back();</script>";
      }
      ?>
    </div>
    <span> <a class="navbar-brand" href="sair.php"><i class="fa-solid fa-right-from-bracket"></i></a></span>
  </nav>
    <div class = "container">
        <h2>Lista de Usuários</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'conexao.php';
    $select = "SELECT * FROM tb_user";
    $query = mysqli_query($conexao, $select);
    while ($result = mysqli_fetch_array($query)){
    ?>
    <tr>
      <th scope="row"><?php echo $result['id_usuario']; ?> </th>
      <td><?php echo $result['nm_usuario']; ?> </td>
      <td><?php echo $result['nm_setor']; ?> </td>
      <td><?php echo $result['login']; ?> </td>
      <td>
      <a href="edit_user.php?cod=<?php echo $result['id_usuario']; ?>"><i class="icon fa-solid fa-user-pen"></i></a> 
      <a href="deletar_user.php?cod=<?php echo $result['id_usuario']; ?>"><i class="icon2 fa-solid fa-trash-can"></i></a> 
      </td>
    </tr>
 
    <?php } ?>
 
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>