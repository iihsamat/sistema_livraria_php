<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Cadastro de Usuario</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
     <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css"> 
</head> 
<body>
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
            <a class="nav-link" href="cadastro_cliente.html">Cadastrar Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_editora.html">Cadastrar Editora</a>
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
<div class="container text-center"> 
  <div class="row"> 
    <div class="col"></div> 
    <div class="col"> 
      <div><img src="./imgs/livro.png" alt=""></div> 
      <form class="user" action="cadastro_cliente.php" method="post"> 
        <div class="mb-3"> 
          <label for="nome" class="form-label">CADASTRO</label> 
          <input type="name" class="form-control" placeholder="Insira seu nome" id="nome" name="nomecliente"> 
        </div> 
        <div class="mb-3"> 
          <label for="enderecocliente" class="form-label"></label> 
          <input type="text" class="form-control" placeholder="Insira seu Endereço" id="enderecocliente" name="enderecocliente"> 
        </div> 
        <div class="mb-3"> 
          <label for="numeroendereco" class="form-label"></label> 
          <input type="number" class="form-control" placeholder="Insira o número do seu Endereço" id="numeroendereco" name="numeroendereco"> 
        </div> 
        <div class="mb-3"> 
          <label for="numerocpf" class="form-label"></label> 
          <input type="number" class="form-control" placeholder="Insira seu CPF" id="numerocpf" name="numerocpf"> 
        </div> 
        <div class="mb-3"> 
          <label for="numerocnpj" class="form-label"></label> 
          <input type="number" class="form-control" placeholder="Insira seu CNPJ" id="numerocnpj" name="numerocnpj"> 
        </div> 
        <div class="mb-3"> 
          <label for="numerotelefone" class="form-label"></label> 
          <input type="number" class="form-control" placeholder="Insira seu telefone" id="numerotelefone" name="numerotelefone"> 
        </div> 
        <div class="botão"> 
          <a class="btn btn-outline-light" href="index.html" role="button">Voltar</a> 
          <button type="submit" class="btn btn-outline-light">Cadastrar</button> 
        </div> 
      </form> 
    </div> 
    <div class="col"></div> 
  </div> 
</div> 





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body> 
</html>