<?php
include_once("../model/usuarioModel.php");
UsarAcesso()
?>

<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>Loja jogos</title>
</head>
<body>
  

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <img src="img/edt.png"width="100" height="100">
    <a class="navbar-brand" href="#">Loja de Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="indexAdm.php">Home</a>
        </li>

      
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuario
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="caduser.php">Cadastro</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../view/visuUsuNome.php">Pesquisar por nome</a></li>
            <li><a class="dropdown-item" href="../view/visuUsuEmail.php">Pesquisar por email</a></li>
            <li><a class="dropdown-item" href="../view/visuUsuCod.php">Pesquisar por codiogo</a></li>

          </ul>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Jogos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../view/cadjogo.php">Cadastrar jogo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../view/visuJojo.php">Pesquisar jogo por nome</a></li>
            <li><a class="dropdown-item" href="../view/visuJgoCod.php">Pesquisar por Codigo</a></li>
            <li><a class="dropdown-item" href="../view/visugenJogo.php">Pesquisar por Genero</a></li>
            <li><a class="dropdown-item" href="#">Estrategia</a></li>
          </ul>
        </li>
       
                  <a class="nav-link disabled">Contato</a>

      </ul>
      
     
       <ul>  Olà <?php echo($_SESSION["nome"]);?> </ul>
      
    </div>
  </div>
</nav>
    
</body>
</html>